@can('dashboard')
    <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}" href="{!! url('dashboard') !!}">@if($icons)
                <i class="nav-icon fa fa-dashboard"></i>@endif
            <p>{{trans('lang.dashboard')}}<span class="right badge badge-danger">New</span></p></a>
    </li>
@endcan

@can('favorites.index')
    <li class="nav-item">
        <a class="nav-link {{ Request::is('favorites*') ? 'active' : '' }}" href="{!! route('favorites.index') !!}">@if($icons)
                <i class="nav-icon fa fa-heart"></i>@endif<p>{{trans('lang.favorite_plural')}}</p></a>
    </li>
@endcan

<li class="nav-header">{{trans('lang.app_management')}}</li>

@can('restaurants.index')
    <li class="nav-item has-treeview {{ Request::is('restaurants*') || Request::is('galleries*') || Request::is('restaurantReviews*') ? 'menu-open' : '' }}">
        <a href="#" class="nav-link {{ Request::is('restaurants*') || Request::is('galleries*') || Request::is('restaurantReviews*') ? 'active' : '' }}"> @if($icons)
                <i class="nav-icon fa fa-cutlery"></i>@endif
            <p>{{trans('lang.restaurant_plural')}} <i class="right fa fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @can('restaurants.index')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('restaurants*') ? 'active' : '' }}" href="{!! route('restaurants.index') !!}">@if($icons)
                            <i class="nav-icon fa fa-cutlery"></i>@endif<p>{{trans('lang.restaurant_plural')}}</p></a>
                </li>
            @endcan
            @can('galleries.index')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('galleries*') ? 'active' : '' }}" href="{!! route('galleries.index') !!}">@if($icons)
                            <i class="nav-icon fa fa-image"></i>@endif<p>{{trans('lang.gallery_plural')}}</p></a>
                </li>
            @endcan
            @can('restaurantReviews.index')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('restaurantReviews*') ? 'active' : '' }}" href="{!! route('restaurantReviews.index') !!}">@if($icons)
                            <i class="nav-icon fa fa-comments"></i>@endif<p>{{trans('lang.restaurant_review_plural')}}</p></a>
                </li>
            @endcan
        </ul>
    </li>
@endcan

@can('foods.index')
    <li class="nav-item has-treeview {{ Request::is('categories*') || Request::is('foods*') || Request::is('extras*') || Request::is('foodReviews*') || Request::is('nutrition*') ? 'menu-open' : '' }}">
        <a href="#" class="nav-link {{ Request::is('categories*') || Request::is('foods*') || Request::is('extras*') || Request::is('foodReviews*') || Request::is('nutrition*') ? 'active' : '' }}"> @if($icons)
                <i class="nav-icon fa fa-fire"></i>@endif
            <p>{{trans('lang.food_plural')}} <i class="right fa fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @can('categories.index')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('categories*') ? 'active' : '' }}" href="{!! route('categories.index') !!}">@if($icons)
                            <i class="nav-icon fa fa-folder"></i>@endif<p>{{trans('lang.category_plural')}}</p></a>
                </li>
            @endcan

            @can('foods.index')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('foods*') ? 'active' : '' }}" href="{!! route('foods.index') !!}">@if($icons)
                            <i class="nav-icon fa fa-fire"></i>@endif
                        <p>{{trans('lang.food_plural')}}</p></a>
                </li>
            @endcan

            @can('extras.index')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('extras*') ? 'active' : '' }}" href="{!! route('extras.index') !!}">@if($icons)
                            <i class="nav-icon fa fa-plus-circle"></i>@endif<p>{{trans('lang.extra_plural')}}</p></a>
                </li>
            @endcan

            @can('foodReviews.index')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('foodReviews*') ? 'active' : '' }}" href="{!! route('foodReviews.index') !!}">@if($icons)
                            <i class="nav-icon fa fa-comments"></i>@endif<p>{{trans('lang.food_review_plural')}}</p></a>
                </li>
            @endcan


            @can('nutrition.index')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('nutrition*') ? 'active' : '' }}" href="{!! route('nutrition.index') !!}">@if($icons)
                            <i class="nav-icon fa fa-tasks"></i>@endif<p>{{trans('lang.nutrition_plural')}}</p></a>
                </li>
            @endcan

        </ul>
    </li>
@endcan

@can('orders.index')
    <li class="nav-item has-treeview {{ Request::is('orders*') || Request::is('foodOrders*') || Request::is('orderStatuses*') || Request::is('payments*') ? 'menu-open' : '' }}">
        <a href="#" class="nav-link {{ Request::is('orders*') || Request::is('foodOrders*') || Request::is('orderStatuses*') || Request::is('payments*') ? 'active' : '' }}"> @if($icons)
                <i class="nav-icon fa fa-archive"></i>@endif
            <p>{{trans('lang.order_plural')}} <i class="right fa fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">

            @can('orders.index')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('orders*') ? 'active' : '' }}" href="{!! route('orders.index') !!}">@if($icons)
                            <i class="nav-icon fa fa-archive"></i>@endif<p>{{trans('lang.order_plural')}}</p></a>
                </li>
            @endcan
            @can('foodOrders.index')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('foodOrders*') ? 'active' : '' }}" href="{!! route('foodOrders.index') !!}">@if($icons)
                            <i class="nav-icon fa fa-ticket"></i>@endif<p>{{trans('lang.food_order_plural')}}</p></a>
                </li>
            @endcan
            @can('orderStatuses.index')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('orderStatuses*') ? 'active' : '' }}" href="{!! route('orderStatuses.index') !!}">@if($icons)
                            <i class="nav-icon fa fa-server"></i>@endif<p>{{trans('lang.order_status_plural')}}</p></a>
                </li>
            @endcan

            @can('payments.index')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('payments*') ? 'active' : '' }}" href="{!! route('payments.index') !!}">@if($icons)
                            <i class="nav-icon fa fa-credit-card"></i>@endif<p>{{trans('lang.payment_plural')}}</p></a>
                </li>
            @endcan

        </ul>
    </li>
@endcan


@can('faqs.index')
    <li class="nav-item has-treeview {{ Request::is('faqCategories*') || Request::is('faqs*') ? 'menu-open' : '' }}">
        <a href="#" class="nav-link {{ Request::is('faqs*') || Request::is('faqCategories*') ? 'active' : '' }}"> @if($icons)
                <i class="nav-icon fa fa-support"></i>@endif
            <p>{{trans('lang.faq_plural')}} <i class="right fa fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @can('faqCategories.index')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('faqCategories*') ? 'active' : '' }}" href="{!! route('faqCategories.index') !!}">@if($icons)
                            <i class="nav-icon fa fa-folder"></i>@endif<p>{{trans('lang.faq_category_plural')}}</p></a>
                </li>
            @endcan

            @can('faqs.index')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('faqs*') ? 'active' : '' }}" href="{!! route('faqs.index') !!}">@if($icons)
                            <i class="nav-icon fa fa-question-circle"></i>@endif
                        <p>{{trans('lang.faq_plural')}}</p></a>
                </li>
            @endcan
        </ul>
    </li>
@endcan

<li class="nav-header">{{trans('lang.app_setting')}}</li>
@can('medias')
    <li class="nav-item">
        <a class="nav-link {{ Request::is('medias*') ? 'active' : '' }}" href="{!! url('medias') !!}">@if($icons)<i class="nav-icon fa fa-picture-o"></i>@endif
            <p>{{trans('lang.media_plural')}}</p></a>
    </li>
@endcan
@can('app-settings')
    <li class="nav-item has-treeview {{ Request::is('settings*') || Request::is('menu*') || Request::is('notificationTypes*') || Request::is('currencies*') ? 'menu-open' : '' }}">
        <a href="#" class="nav-link {{ Request::is('settings*') || Request::is('currencies*') || Request::is('notificationTypes*')   ? 'active' : '' }}"> @if($icons)<i class="nav-icon fa fa-users"></i>@endif
            <p>{{trans('lang.app_setting')}} <i class="right fa fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{!! url('settings/app/globals') !!}" class="nav-link {{  Request::is('settings/app/globals*') ? 'active' : '' }}">
                    @if($icons)<i class="nav-icon fa fa-cog"></i> @endif <p>{{trans('lang.app_setting_globals')}}</p>
                </a>
            </li>

            <li class="nav-item has-treeview {{ Request::is('settings/permissions*') || Request::is('settings/roles*') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ Request::is('settings/permissions*') || Request::is('settings/roles*') ? 'active' : '' }}">
                    @if($icons)<i class="nav-icon fa fa-user-secret"></i>@endif
                    <p>
                        {{trans('lang.permission_menu')}}
                        <i class="right fa fa-angle-left"></i>
                    </p></a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('settings/permissions') ? 'active' : '' }}" href="{!! route('permissions.index') !!}">
                            @if($icons)<i class="nav-icon fa fa-circle-o"></i>@endif
                            <p>{{trans('lang.permission_table')}}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('settings/permissions/create') ? 'active' : '' }}" href="{!! route('permissions.create') !!}">
                            @if($icons)<i class="nav-icon fa fa-circle-o"></i>@endif
                            <p>{{trans('lang.permission_create')}}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('settings/roles') ? 'active' : '' }}" href="{!! route('roles.index') !!}">
                            @if($icons)<i class="nav-icon fa fa-circle-o"></i>@endif
                            <p>{{trans('lang.role_table')}}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('settings/roles/create') ? 'active' : '' }}" href="{!! route('roles.create') !!}">
                            @if($icons)<i class="nav-icon fa fa-circle-o"></i>@endif
                            <p>{{trans('lang.role_create')}}</p>
                        </a>
                    </li>
                </ul>

            </li>

            @can('users.index')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('settings/users*') ? 'active' : '' }}" href="{!! route('users.index') !!}">@if($icons)
                            <i class="nav-icon fa fa-users"></i>@endif
                        <p>{{trans('lang.user_plural')}}</p></a>
                </li>
            @endcan
            <li class="nav-item">
                <a class="nav-link {{ Request::is('settings/customFields*') ? 'active' : '' }}" href="{!! route('customFields.index') !!}">@if($icons)
                        <i class="nav-icon fa fa-list"></i>@endif<p>{{trans('lang.custom_field_plural')}}</p></a>
            </li>


            <li class="nav-item">
                <a href="{!! url('settings/app/localisation') !!}" class="nav-link {{  Request::is('settings/app/localisation*') ? 'active' : '' }}">
                    @if($icons)<i class="nav-icon fa fa-language"></i> @endif <p>{{trans('lang.app_setting_localisation')}}</p>
                </a>
            </li>
            @can('currencies.index')
            <li class="nav-item">
              <a class="nav-link {{ Request::is('currencies*') ? 'active' : '' }}" href="{!! route('currencies.index') !!}">@if($icons)<i class="nav-icon fa fa-money"></i>@endif<p>{{trans('lang.currency_plural')}}</p></a>
            </li>
            @endcan
            <li class="nav-item">
                <a href="{!! url('settings/app/social') !!}" class="nav-link {{  Request::is('settings/app/social*') ? 'active' : '' }}">
                    @if($icons)<i class="nav-icon fa fa-globe"></i> @endif <p>{{trans('lang.app_setting_social')}}</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{!! url('settings/app/payment') !!}" class="nav-link {{  Request::is('settings/app/payment*') ? 'active' : '' }}">
                    @if($icons)<i class="nav-icon fa fa-credit-card"></i> @endif <p>{{trans('lang.app_setting_payment')}}</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{!! url('settings/app/notifications') !!}" class="nav-link {{  Request::is('settings/app/notifications*') ? 'active' : '' }}">
                    @if($icons)<i class="nav-icon fa fa-bell"></i> @endif <p>{{trans('lang.app_setting_notifications')}}</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{!! url('settings/mail/smtp') !!}" class="nav-link {{ Request::is('settings/mail*') ? 'active' : '' }}">
                    @if($icons)<i class="nav-icon fa fa-envelope"></i> @endif <p>{{trans('lang.app_setting_mail')}}</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{!! url('settings/translation/en') !!}" class="nav-link {{ Request::is('settings/translation*') ? 'active' : '' }}">
                    @if($icons) <i class="nav-icon fa fa-language"></i> @endif <p>{{trans('lang.app_setting_translation')}}</p>
                </a>
            </li>

        </ul>
    </li>
@endcan



