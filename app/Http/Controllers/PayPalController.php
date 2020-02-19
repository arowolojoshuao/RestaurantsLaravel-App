<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\IPNStatus;
use App\Item;
use App\Repositories\CartRepository;
use App\Repositories\FoodOrderRepository;
use App\Repositories\NotificationRepository;
use App\Repositories\OrderRepository;
use App\Repositories\PaymentRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Prettus\Validator\Exceptions\ValidatorException;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalController extends Controller
{
    /**
     * @var ExpressCheckout
     */
    protected $provider;
    /** @var  PaymentRepository */
    private $paymentRepository;
    /** @var  OrderRepository */
    private $orderRepository;
    /** @var  FoodOrderRepository */
    private $foodOrderRepository;
    /** @var  CartRepository */
    private $cartRepository;
    /** @var  UserRepository */
    private $userRepository;
    /** @var  NotificationRepository */
    private $notificationRepository;

    public function __construct(OrderRepository $orderRepo, FoodOrderRepository $foodOrderRepository, CartRepository $cartRepo, PaymentRepository $paymentRepo, NotificationRepository $notificationRepo, UserRepository $userRepository)
    {
        $this->provider = new ExpressCheckout();
        $this->orderRepository = $orderRepo;
        $this->foodOrderRepository = $foodOrderRepository;
        $this->cartRepository = $cartRepo;
        $this->userRepository = $userRepository;
        $this->paymentRepository = $paymentRepo;
        $this->notificationRepository = $notificationRepo;
    }

    public function index()
    {
        return view('welcome');
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function getExpressCheckout(Request $request)
    {
        $user = $this->userRepository->findByField('api_token', $request->get('api_token'))->first();
        if (!empty($user)) {
            $cart = $this->getCheckoutData($user->id);

            try {
                $response = $this->provider->setExpressCheckout($cart);
                return redirect($response['paypal_link']);
            } catch (\Exception $e) {
                session()->put(['code' => 'danger', 'message' => "Error processing PayPal payment for your order :" . $e->getMessage()]);
            }
        }
    }

    /**
     * Set cart data for processing payment on PayPal.
     *
     * @param bool $recurring
     *
     * @return array
     */
    protected function getCheckoutData($user_id)
    {
        $data = [];
        $total = 0;
        $order_id = $this->paymentRepository->all()->count() + 1;
        try {
            $user = $this->userRepository->findWithoutFail($user_id);
            if (!empty($user)) {
                $carts = $this->cartRepository->findByField('user_id', $user_id);
                foreach ($carts as $cart) {
                    $price = $cart->food->price + ($cart->food->price * floatval(setting('default_tax',0))/100);
                    $data['items'][] = [
                        'name' => $cart->food->name,
                        'price' => $price,
                        'qty' => $cart->quantity,
                    ];
                    $total += $price * $cart->quantity;
                }
                $data['tax'] = floatval(setting('default_tax',0))/100;
                $data['total'] = $total;
                $data['return_url'] = url('payments/paypal/express-checkout-success');
                $data['cancel_url'] = url('payments/paypal');
            }
            $data['invoice_id'] = $order_id.'_'.date("Y_m_d_h_i_sa");
            $data['invoice_description'] = $user_id;

        } catch (ValidatorException $e) {
            return $data = [];
        }

        return $data;


    }

    /**
     * Process payment on PayPal.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getExpressCheckoutSuccess(Request $request)
    {
        $token = $request->get('token');
        $PayerID = $request->get('PayerID');

        // Verify Express Checkout Token
        $response = $this->provider->getExpressCheckoutDetails($token);
        $user_id = $response['DESC'];
        $cart = $this->getCheckoutData($user_id);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {

            // Perform transaction on PayPal
            $payment_status = $this->provider->doExpressCheckoutPayment($cart, $token, $PayerID);
            $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];
            Log::info($payment_status);
            $order = $this->createOrder($user_id, $status);

            if (!empty($order)) {
                session()->put(['code' => 'success', 'message' => "Order $order->id has been paid successfully!"]);
            } else {
                session()->put(['code' => 'danger', 'message' => "Error processing PayPal payment for Order!"]);

            }

            return redirect(url('payments/paypal'));
        }
    }

    /**
     * Create invoice.
     *
     * @param array $cart
     * @param string $status
     *
     * @return \App\Models\Order
     */
    protected function createOrder($user_id, $status)
    {
        if (!strcasecmp($status, 'Completed') || !strcasecmp($status, 'Processed')) {
            $amount = 0;
            $user = $this->userRepository->findWithoutFail($user_id);
            $orders = [];
            if (!empty($user)) {
                $carts = $this->cartRepository->findByField('user_id', $user_id);
                foreach ($carts as $cart) {
                    $orders['foods'][] = [
                        'food_id' => $cart->food->id,
                        'price' => $cart->food->price,
                        'quantity' => $cart->quantity,
                        'extras' => $cart->extras->pluck('id')->toArray(),
                    ];

                }
                $orders['user_id'] = $user->id;
                $orders['order_status_id'] = 1;
                $orders['tax'] = setting('default_tax', 0);
            }
            $order = $this->orderRepository->create($orders);
            foreach ($orders['foods'] as $foodOrder) {
                $foodOrder['order_id'] = $order->id;
                $amount += $foodOrder['price'] * $foodOrder['quantity'];
                $this->foodOrderRepository->create($foodOrder);
            }
            $this->cartRepository->deleteWhere(['user_id' => $order->user_id]);

            $amount = $amount + ($amount * $order->tax / 100);
            $payment = $this->paymentRepository->create([
                "user_id" => $order->user_id,
                "description" => trans("lang.payment_order_done"),
                "price" => $amount,
                "method" => "PayPal",
                "status" => $status,
            ]);
            $this->orderRepository->update(['payment_id'=>$payment->id],$order->id);
            $this->notificationRepository->create([
                "title" => trans("lang.notification_order_done", ['order_id' => $order->id]),
                "user_id" => $order->user_id,
                "notification_type_id" => 1,
            ]);
            return $order;
        } else {
            return null;

        }

    }
}
