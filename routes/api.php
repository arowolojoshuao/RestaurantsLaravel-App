<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('login', 'API\UserAPIController@login');
Route::post('register', 'API\UserAPIController@register');
Route::get('user', 'API\UserAPIController@user');
Route::get('logout', 'API\UserAPIController@logout');
Route::get('settings', 'API\UserAPIController@settings');
Route::middleware('auth:api')->group(function () {
    Route::post('users/{id}', 'API\UserAPIController@update');
    Route::resource('restaurants', 'API\RestaurantAPIController');

    Route::resource('categories', 'API\CategoryAPIController');

    Route::resource('faq_categories', 'API\FaqCategoryAPIController');

    Route::resource('order_statuses', 'API\OrderStatusAPIController');

    Route::resource('foods', 'API\FoodAPIController');

    Route::resource('galleries', 'API\GalleryAPIController');

    Route::resource('food_reviews', 'API\FoodReviewAPIController');

    Route::resource('nutrition', 'API\NutritionAPIController');

    Route::resource('extras', 'API\ExtraAPIController');

    Route::get('payments/byMonth', 'API\PaymentAPIController@byMonth')->name('payments.byMonth');
    Route::resource('payments', 'API\PaymentAPIController');

    Route::resource('faqs', 'API\FaqAPIController');

    Route::resource('restaurant_reviews', 'API\RestaurantReviewAPIController');

    Route::get('favorites/exist', 'API\FavoriteAPIController@exist');
    Route::resource('favorites', 'API\FavoriteAPIController');

    Route::resource('orders', 'API\OrderAPIController');

    Route::resource('food_orders', 'API\FoodOrderAPIController');

    Route::resource('notification_types', 'API\NotificationTypeAPIController');

    Route::resource('notifications', 'API\NotificationAPIController');

    Route::get('carts/count', 'API\CartAPIController@count')->name('carts.count');
    Route::resource('carts', 'API\CartAPIController');

    Route::resource('currencies', 'API\CurrencyAPIController');
});

