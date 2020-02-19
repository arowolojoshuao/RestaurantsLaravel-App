<?php

namespace App\Http\Controllers;

use anlutro\LaravelSettings\SettingStore;
use App\DataTables\UserDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Upload;
use App\Repositories\CurrencyRepository;
use App\Repositories\UploadRepository;
use App\Repositories\UserRepository;
use App\Repositories\RoleRepository;
use Flash;
use function foo\func;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Prettus\Validator\Exceptions\ValidatorException;
use Themsaid\Langman\Manager;

class AppSettingController extends Controller
{
    /** @var  UserRepository */
    private $userRepository;

    /**
     * @var RoleRepository
     */
    private $roleRepository;

    private $langManager;
    private $uploadRepository;
    private $currencyRepository;

    public function __construct(UserRepository $userRepo, RoleRepository $roleRepo, UploadRepository $uploadRepository, CurrencyRepository $currencyRepository)
    {
        parent::__construct();
        $this->userRepository = $userRepo;
        $this->roleRepository = $roleRepo;
        $this->currencyRepository = $currencyRepository;
        $this->langManager = new Manager(new Filesystem(), config('langman.path'), []);
        $this->uploadRepository = $uploadRepository;
    }

    public function update(Request $request)
    {
        $input = $request->except(['_method', '_token']);
        if(ends_with(url()->previous(),"globals")){
            if (empty($input['app_logo'])) {
                unset($input['app_logo']);
            }
            if (empty($input['custom_field_models'])) {
                setting()->forget('custom_field_models');
            }
            if (!isset($input['blocked_ips'])) {
                unset($input['blocked_ips']);
                setting()->forget('blocked_ips');
            }
        }
        setting($input)->save();
        Flash::success(trans('lang.app_setting_global').' updated successfully.');
        Artisan::call("config:clear");

        return redirect()->back();
    }

    public function syncTranslation(Request $request)
    {
        // TODO syncTranslation
//        Flash::warning('Translate in admin panel is under development please use lang folders (resources/lang/...)');
        Artisan::call('langman:sync');
        return redirect()->back();
    }

    public function translate(Request $request)
    {
        // TODO translate from admin panel
//        Flash::warning('Translate in admin panel is under development please use lang folders (resources/lang/...)');
        $inputs = $request->except(['_method', '_token', '_current_lang']);
        $currentLang = $request->input('_current_lang');
        if (!$inputs && !count($inputs)) {
            Flash::error('Translate not loaded');
            return redirect()->back();
        }
        $langFiles = $this->langManager->files();

        if (!$langFiles && !count($langFiles)) {
            Flash::error('Translate not loaded');
            return redirect()->back();
        }
        foreach ($langFiles as $filename => $items) {
            $path = $items[$currentLang];
            $needed = [];
            foreach ($inputs as $key => $input) {
                if (starts_with($key, $filename)) {
                    $langKeyWithoutFile = explode('|',$key,2)[1];
                    $needed = array_merge_recursive($needed , getNeededArray('|',$langKeyWithoutFile,$input));
                }
            }
            ksort($needed);
            $this->langManager->writeFile($path, $needed);
        }
        return redirect()->back();
    }


    public function index($type = null, $tab = null)
    {
        if (empty($type)) {
            Flash::error(trans('lang.app_setting_global').'not found');
            return redirect()->back();
        }
        $langFiles = [];
        $languages = getAvailableLanguages();
        if ($type && $type === 'translation' && $tab) {
            if (!array_has($languages, $tab)) {
                Flash::error('Translate not loaded');
                return redirect()->back();
            }
            $langFiles = $this->langManager->files();
            return view('settings.' . $type . '.index', compact(['languages', 'type', 'tab', 'langFiles']));

        }

        foreach (timezone_abbreviations_list() as $abbr => $timezone) {
            foreach ($timezone as $val) {
                if (isset($val['timezone_id'])) {
                    $group = preg_split('/\//', $val['timezone_id'])[0];
                    $timezones[$group][$val['timezone_id']] = $val['timezone_id'];
                }
            }
        }
        $upload = $this->uploadRepository->findByField('uuid', setting('app_logo'))->first();

        $currencies = $this->currencyRepository->all()->pluck('name_symbol','symbol');

        $customFieldModels = getModelsClasses(app_path('Models'));

        return view('settings.' . $type . '.' . $tab . '', compact(['languages', 'type', 'tab', 'langFiles', 'timezones', 'upload', 'customFieldModels', 'currencies']));
    }
}
