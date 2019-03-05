<!DOCTYPE html>
@php
$rtl_support = false;
@endphp
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>Dashboard | @yield('title')</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>

    <script>
        WebFont.load({
            google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->

    <!--begin::Global Theme Styles -->
    <link href="/{{env('BACKEND_THEME_NAME')}}/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css"/>

    @if($rtl_support == true)
        <link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />
    @endif
    <link href="/{{env('BACKEND_THEME_NAME')}}/assets/demo/demo11/base/style.bundle.css" rel="stylesheet" type="text/css"/>

    @if($rtl_support == true)
        <link href="assets/demo/demo11/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />
    @endif
    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->
    <link href="/{{env('BACKEND_THEME_NAME')}}/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css"/>

    @if($rtl_support == true)
        <link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />
    @endif
    <!--end::Page Vendors Styles -->
    <link rel="shortcut icon" href="/{{env('BACKEND_THEME_NAME')}}/assets/demo/demo11/media/img/logo/favicon.ico"/>
</head>

<body
    class="m-content--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <!-- BEGIN: Header -->
    <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
        <div class="m-container m-container--fluid m-container--full-height">
            <div class="m-stack m-stack--ver m-stack--desktop">

                <!-- BEGIN: Brand -->
                <div class="m-stack__item m-brand  m-brand--skin-light ">
                    <div class="m-stack m-stack--ver m-stack--general m-stack--fluid">
                        <div class="m-stack__item m-stack__item--middle m-brand__logo">
                            <a href="index.blade.php" class="m-brand__logo-wrapper">
                                <img alt="" src="/{{env('BACKEND_THEME_NAME')}}/assets/images/backend/logo.png" style="height: 50px"/>
                            </a>
                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools">
                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-left m-dropdown--align-push"
                                m-dropdown-toggle="click" aria-expanded="true">
                                <a href="#"class="dropdown-toggle m-dropdown__toggle btn btn-outline-metal m-btn  m-btn--icon m-btn--pill">
                                    <span>Dashboard</span>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span
                                        class="m-dropdown__arrow m-dropdown__arrow--left m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first m--hide">
                                                        <span class="m-nav__section-text">Quick Menu</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">Human Resources</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">Customer Relationship</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">Order Processing</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">Accounting</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit">
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">Customer Relationship</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">Order Processing</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                            <a href="javascript:;" id="m_aside_left_offcanvas_toggle"
                               class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>

                            <!-- END -->

                            <!-- BEGIN: Topbar Toggler -->
                            <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;"
                               class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                <i class="flaticon-more"></i>
                            </a>

                            <!-- BEGIN: Topbar Toggler -->
                        </div>
                    </div>
                </div>

                <!-- END: Brand -->
                <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

                    <!-- BEGIN: Topbar -->
                    <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-topbar__nav-wrapper">
                            <ul class="m-topbar__nav m-nav m-nav--inline">
                                <li class="m-nav__item m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light	m-list-search m-list-search--skin-light"
                                    m-dropdown-toggle="click" id="m_quicksearch"
                                    m-quicksearch-mode="dropdown" m-dropdown-persistent="1">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
                                        <span class="m-nav__link-icon"><span class="m-nav__link-icon-wrapper"><i
                                                    class="flaticon-search-1"></i></span></span>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                                        <div class="m-dropdown__inner ">
                                            <div class="m-dropdown__header">
                                                <form class="m-list-search__form">
                                                    <div class="m-list-search__form-wrapper">
																<span class="m-list-search__form-input-wrapper">
																	<input id="m_quicksearch_input" autocomplete="off"
                                                                           type="text" name="q"
                                                                           class="m-list-search__form-input" value=""
                                                                           placeholder="Search...">
																</span>
                                                        <span class="m-list-search__form-icon-close"
                                                              id="m_quicksearch_close">
																	<i class="la la-remove"></i>
																</span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__scrollable m-scrollable" data-scrollable="true"
                                                     data-height="300" data-mobile-height="200">
                                                    <div class="m-dropdown__content">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="m-nav__item m-topbar__notifications m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width"
                                    m-dropdown-toggle="click" m-dropdown-persistent="1">
                                    <a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
												<span class="m-nav__link-icon">
													<span class="m-nav__link-icon-wrapper"><i
                                                            class="flaticon-alarm"></i></span>
													<span class="m-nav__link-badge m-badge m-badge--success">3</span>
												</span>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__header m--align-center">
                                                <span class="m-dropdown__header-title">9 New</span>
                                                <span class="m-dropdown__header-subtitle">User Notifications</span>
                                            </div>
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand"
                                                        role="tablist">
                                                        <li class="nav-item m-tabs__item">
                                                            <a class="nav-link m-tabs__link active" data-toggle="tab"
                                                               href="#topbar_notifications_notifications" role="tab">
                                                                Alerts
                                                            </a>
                                                        </li>
                                                        <li class="nav-item m-tabs__item">
                                                            <a class="nav-link m-tabs__link" data-toggle="tab"
                                                               href="#topbar_notifications_events" role="tab">Events</a>
                                                        </li>
                                                        <li class="nav-item m-tabs__item">
                                                            <a class="nav-link m-tabs__link" data-toggle="tab"
                                                               href="#topbar_notifications_logs" role="tab">Logs</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active"
                                                             id="topbar_notifications_notifications" role="tabpanel">
                                                            <div class="m-scrollable" data-scrollable="true"
                                                                 data-height="250" data-mobile-height="200">
                                                                <div
                                                                    class="m-list-timeline m-list-timeline--skin-light">
                                                                    <div class="m-list-timeline__items">
                                                                        <div class="m-list-timeline__item">
                                                                            <span
                                                                                class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
                                                                            <span class="m-list-timeline__text">12 new users registered</span>
                                                                            <span
                                                                                class="m-list-timeline__time">Just now</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span class="m-list-timeline__text">System shutdown <span
                                                                                    class="m-badge m-badge--success m-badge--wide">pending</span></span>
                                                                            <span
                                                                                class="m-list-timeline__time">14 mins</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span class="m-list-timeline__text">New invoice received</span>
                                                                            <span
                                                                                class="m-list-timeline__time">20 mins</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span class="m-list-timeline__text">DB overloaded 80% <span
                                                                                    class="m-badge m-badge--info m-badge--wide">settled</span></span>
                                                                            <span
                                                                                class="m-list-timeline__time">1 hr</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span class="m-list-timeline__text">System error - <a
                                                                                    href="#"
                                                                                    class="m-link">Check</a></span>
                                                                            <span
                                                                                class="m-list-timeline__time">2 hrs</span>
                                                                        </div>
                                                                        <div
                                                                            class="m-list-timeline__item m-list-timeline__item--read">
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span href="" class="m-list-timeline__text">New order received <span
                                                                                    class="m-badge m-badge--danger m-badge--wide">urgent</span></span>
                                                                            <span
                                                                                class="m-list-timeline__time">7 hrs</span>
                                                                        </div>
                                                                        <div
                                                                            class="m-list-timeline__item m-list-timeline__item--read">
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span class="m-list-timeline__text">Production server down</span>
                                                                            <span
                                                                                class="m-list-timeline__time">3 hrs</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span class="m-list-timeline__badge"></span>
                                                                            <span class="m-list-timeline__text">Production server up</span>
                                                                            <span
                                                                                class="m-list-timeline__time">5 hrs</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="topbar_notifications_events"
                                                             role="tabpanel">
                                                            <div class="m-scrollable" data-scrollable="true"
                                                                 data-height="250" data-mobile-height="200">
                                                                <div
                                                                    class="m-list-timeline m-list-timeline--skin-light">
                                                                    <div class="m-list-timeline__items">
                                                                        <div class="m-list-timeline__item">
                                                                            <span
                                                                                class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                            <a href="" class="m-list-timeline__text">New
                                                                                order received</a>
                                                                            <span
                                                                                class="m-list-timeline__time">Just now</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span
                                                                                class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>
                                                                            <a href="" class="m-list-timeline__text">New
                                                                                invoice received</a>
                                                                            <span
                                                                                class="m-list-timeline__time">20 mins</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span
                                                                                class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                            <a href="" class="m-list-timeline__text">Production
                                                                                server up</a>
                                                                            <span
                                                                                class="m-list-timeline__time">5 hrs</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span
                                                                                class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                            <a href="" class="m-list-timeline__text">New
                                                                                order received</a>
                                                                            <span
                                                                                class="m-list-timeline__time">7 hrs</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span
                                                                                class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                            <a href="" class="m-list-timeline__text">System
                                                                                shutdown</a>
                                                                            <span
                                                                                class="m-list-timeline__time">11 mins</span>
                                                                        </div>
                                                                        <div class="m-list-timeline__item">
                                                                            <span
                                                                                class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                            <a href="" class="m-list-timeline__text">Production
                                                                                server down</a>
                                                                            <span
                                                                                class="m-list-timeline__time">3 hrs</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="topbar_notifications_logs"
                                                             role="tabpanel">
                                                            <div class="m-stack m-stack--ver m-stack--general"
                                                                 style="min-height: 180px;">
                                                                <div
                                                                    class="m-stack__item m-stack__item--center m-stack__item--middle">
                                                                    <span class="">All caught up!<br>No new logs.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- END: Topbar -->
                </div>
            </div>
        </div>
    </header>

    <!-- END: Header -->

    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <!-- BEGIN: Left Aside -->

        <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">
            <!-- BEGIN: Aside Menu -->
        @include(env('BACKEND_THEME_NAME').'.aside')
        <!-- END: Aside Menu -->
        </div>
        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <div class="m-portlet m-portlet--full-height m-portlet--fit ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                @yield('title')
                            </h3>
                        </div>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </div>

    <!-- end:: Body -->

    <!-- begin::Footer -->
    <footer class="m-grid__item		m-footer ">
        <div class="m-container m-container--fluid m-container--full-height m-page__container">
            <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								2017 - {{ \Carbon\Carbon::now()->year }} &copy; Copyright & Design by <a href="https://cafelead.agency" class="m-link">Cafelead</a>
							</span>
                </div>

            </div>
        </div>
    </footer>

    <!-- end::Footer -->
</div>

<!-- end:: Page -->

<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->


<!--begin::Global Theme Bundle -->
<script src="/{{env('BACKEND_THEME_NAME')}}/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="/{{env('BACKEND_THEME_NAME')}}/assets/demo/demo11/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Vendors -->
<script src="/{{env('BACKEND_THEME_NAME')}}/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts -->
<script src="/{{env('BACKEND_THEME_NAME')}}/assets/app/js/dashboard.js" type="text/javascript"></script>

@yield('select2')
<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
