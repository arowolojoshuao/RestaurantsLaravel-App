@extends('layouts.settings.default')
@push('css_lib')
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/iCheck/flat/blue.css')}}">
    <!-- select2 -->
    <link rel="stylesheet" href="{{asset('plugins/select2/select2.min.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
    {{--dropzone--}}
    <link rel="stylesheet" href="{{asset('plugins/dropzone/bootstrap.min.css')}}">
@endpush
@section('settings_title',trans('lang.app_setting_notifications'))
@section('settings_content')
    @include('flash::message')
    @include('adminlte-templates::common.errors')
    <div class="clearfix"></div>
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
                <li class="nav-item">
                    <a class="nav-link active" href="{!! url()->current() !!}"><i class="fa fa-cog mr-2"></i>{{trans('lang.app_setting_'.$tab)}}</a>
                </li>
                @can('notificationTypes.index')
                    <li class="nav-item">
                        <a class="nav-link" href="{!! route('notificationTypes.index') !!}"><i class="fa fa-list mr-2"></i>{{trans('lang.notification_type_table')}}</a>
                    </li>
                @endcan
                @can('notificationTypes.create')
                    <li class="nav-item">
                        <a class="nav-link" href="{!! route('notificationTypes.create') !!}"><i class="fa fa-plus mr-2"></i>{{trans('lang.notification_type_create')}}</a>
                    </li>
                @endcan
            </ul>
        </div>
        <div class="card-body">
            {!! Form::open(['url' => ['settings/update'], 'method' => 'patch']) !!}
            <div class="row">
                <h5 class="col-12 pb-4"><i class="mr-3 fa fa-bell"></i>{!! trans('lang.app_setting_notifications') !!}</h5>
                <!-- 'Boolean enable_facebook Field' -->
                <div class="form-group row col-12">
                    {!! Form::label('enable_notifications', trans('lang.app_setting_enable_notifications'),['class' => 'col-2 control-label text-right']) !!}
                    <div class="checkbox icheck">
                        <label class="w-100 ml-2 form-check-inline">
                            {!! Form::hidden('enable_notifications', null) !!}
                            {!! Form::checkbox('enable_notifications', 1, setting('enable_notifications', false)) !!}
                            <span class="ml-2">{!! trans('lang.app_setting_enable_notifications_help') !!}</span>
                        </label>
                    </div>
                </div>
                <!-- facebook_app_id Field -->
                <div class="form-group row col-12">
                    {!! Form::label('fcm_key', trans('lang.app_setting_fcm_key'), ['class' => 'col-2 control-label text-right']) !!}
                    <div class="col-10">
                        {!! Form::text('fcm_key', setting('fcm_key'),  ['class' => 'form-control','placeholder'=>  trans('lang.app_setting_fcm_key_placeholder')]) !!}
                        <div class="form-text text-muted">
                            {!! trans('lang.app_setting_fcm_key_help') !!}
                        </div>
                    </div>
                </div>

                <!-- Submit Field -->
                <div class="form-group mt-4 col-12 text-right">
                    <button type="submit" class="btn btn-{{setting('theme_color')}}">
                        <i class="fa fa-save"></i> {{trans('lang.save')}} {{trans('lang.app_setting_payment')}}
                    </button>
                    <a href="{!! route('users.index') !!}" class="btn btn-default"><i class="fa fa-undo"></i> {{trans('lang.cancel')}}</a>
                </div>
            </div>
            {!! Form::close() !!}
            <div class="clearfix"></div>
        </div>
    </div>
    </div>
    @include('layouts.media_modal',['collection'=>null])
@endsection
@push('scripts_lib')
    <!-- iCheck -->
    <script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
    <!-- select2 -->
    <script src="{{asset('plugins/select2/select2.min.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
    {{--dropzone--}}
    <script src="{{asset('plugins/dropzone/dropzone.js')}}"></script>
    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        var dropzoneFields = [];
    </script>
@endpush
