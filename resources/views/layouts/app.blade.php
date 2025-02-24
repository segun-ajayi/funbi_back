<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mannat Themes">
    <meta name="keyword" content="">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Theme icon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <!-- Theme Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slidebars.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/menu.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body class="sticky-header">
<section>
    <!-- sidebar left start-->
    @livewire('navigation-menu')
    <!-- sidebar left end-->

    <!-- body content start-->
    <div class="body-content">
        <!-- header section start-->
        <div class="header-section">
            <!--logo and logo icon start-->
            <div class="logo">
                <a href="{{ route('dashboard') }}">
                            <span class="logo-img">
                                <img src="{{ asset('assets/images/logo_sm.png') }}" alt="" height="26">
                            </span>
                    <!--<i class="fa fa-maxcdn"></i>-->
                    <span class="brand-name">Osdaf</span>
                </a>
            </div>

            <!--toggle button start-->
            <a class="toggle-btn"><i class="ti ti-menu"></i></a>
            <!--toggle button end-->

            <!--mega menu start-->
            <div id="navbar-collapse-1" class="navbar-collapse collapse mega-menu">
                <ul class="nav navbar-nav">
                    <!-- Classic dropdown -->
{{--                    <li class="dropdown">--}}
{{--                        <a href="javascript:;" data-toggle="dropdown" class=""> English <i class="mdi mdi-chevron-down"></i> </a>--}}
{{--                        <ul role="menu" class="dropdown-menu language-switch">--}}
{{--                            <li>--}}
{{--                                <a tabindex="-1" href="javascript:;"> German </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a tabindex="-1" href="javascript:;"> Italian </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a tabindex="-1" href="javascript:;"> French </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a tabindex="-1" href="javascript:;"> Spanish </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a tabindex="-1" href="javascript:;"> Russian </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                    <!-- Classic list -->
{{--                    <li>--}}
{{--                        <form class="search-content" action="index.html" method="post">--}}
{{--                            <input type="text" class="form-control mt-3" name="keyword" placeholder="Search...">--}}
{{--                            <span class="search-button"><i class="ti ti-search"></i></span>--}}
{{--                        </form>--}}
{{--                    </li>--}}
                </ul>
            </div>
            <!--mega menu end-->

            <div class="notification-wrap">
                <!--right notification start-->
                <div class="right-notification">
                    <ul class="notification-menu">
                        <li>
                            <a href="javascript:;" class="notification" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-success">4</span>
                            </a>
                            <ul class="dropdown-menu mailbox dropdown-menu-right">
{{--                                <li>--}}
{{--                                    <div class="drop-title">Notifications</div>--}}
{{--                                </li>--}}
{{--                                <li class="notification-scroll">--}}
{{--                                    <div class="message-center">--}}
{{--                                        <a href="#">--}}
{{--                                            <div class="user-img">--}}
{{--                                                <i class="ti ti-star"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="mail-contnet">--}}
{{--                                                <h6>Jane A. Seward</h6>--}}
{{--                                                <span class="mail-desc">Iwon meddle and...</span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                        <a href="#">--}}
{{--                                            <div class="user-img">--}}
{{--                                                <i class="ti ti-heart"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="mail-contnet">--}}
{{--                                                <h6>Michael W. Salazar</h6>--}}
{{--                                                <span class="mail-desc">Lovely gide learn for you...</span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                        <a href="#">--}}
{{--                                            <div class="user-img">--}}
{{--                                                <i class="ti ti-image"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="mail-contnet">--}}
{{--                                                <h6>David D. Chen</h6>--}}
{{--                                                <span class="mail-desc">Send his new photo...</span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                        <a href="#">--}}
{{--                                            <div class="user-img">--}}
{{--                                                <i class="ti ti-bell"></i>--}}
{{--                                            </div>--}}
{{--                                            <div class="mail-contnet">--}}
{{--                                                <h6>Irma J. Hendren</h6>--}}
{{--                                                <span class="mail-desc">6:00 pm our meeting so...</span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="text-center bg-light" href="javascript:void(0);">--}}
{{--                                        <strong>See all notifications</strong>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:;" class="notification" data-toggle="dropdown">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="badge badge-danger">0</span>
                            </a>
{{--                            <ul class="dropdown-menu mailbox dropdown-menu-right">--}}
{{--                                <li>--}}
{{--                                    <div class="drop-title">New Messages 5</div>--}}
{{--                                </li>--}}
{{--                                <li class="notification-scroll">--}}
{{--                                    <div class="message-center">--}}
{{--                                        <a href="#">--}}
{{--                                            <div class="user-img">--}}
{{--                                                <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt="user" class="rounded-circle">--}}
{{--                                                <span class="profile-status online pull-right"></span>--}}
{{--                                            </div>--}}
{{--                                            <div class="mail-contnet">--}}
{{--                                                <h6>Cassie T. Bishop</h6>--}}
{{--                                                <span class="mail-desc">Just see the my admin!</span>--}}
{{--                                                <span class="time">9:30 AM</span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                        <a href="#">--}}
{{--                                            <div class="user-img">--}}
{{--                                                <img src="assets/images/users/avatar-3.jpg" alt="user" class="rounded-circle">--}}
{{--                                                <span class="profile-status busy pull-right"></span>--}}
{{--                                            </div>--}}
{{--                                            <div class="mail-contnet">--}}
{{--                                                <h6>Rudy A. Scott</h6>--}}
{{--                                                <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                        <a href="#">--}}
{{--                                            <div class="user-img">--}}
{{--                                                <img src="assets/images/users/avatar-4.jpg" alt="user" class="rounded-circle">--}}
{{--                                                <span class="profile-status away pull-right"></span>--}}
{{--                                            </div>--}}
{{--                                            <div class="mail-contnet">--}}
{{--                                                <h6>Kevin D. Jernigan</h6>--}}
{{--                                                <span class="mail-desc">I am a singer!</span>--}}
{{--                                                <span class="time">9:08 AM</span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                        <a href="#">--}}
{{--                                            <div class="user-img">--}}
{{--                                                <img src="assets/images/users/avatar-5.jpg" alt="user" class="rounded-circle">--}}
{{--                                                <span class="profile-status offline pull-right"></span>--}}
{{--                                            </div>--}}
{{--                                            <div class="mail-contnet">--}}
{{--                                                <h6>Jane A. Seward</h6>--}}
{{--                                                <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="text-center bg-light" href="javascript:void(0);"> <strong>See all notifications</strong> </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
                        </li>

                        <li>
                            <a href="javascript:;" data-toggle="dropdown">
                                <img src="{{ Auth::user()->profile_photo_url }}" class="mt-3" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-menu">
                                <a class="dropdown-item" href="{{ route('profile.show') }}"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>

                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <a class="dropdown-item" href="{{ route('logout') }}" @click.prevent="$root.submit();"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div><!--right notification end-->
            </div>
        </div>
        <!-- header section end-->

        <div class="container-fluid">
            @if (isset($header))
                <div class="page-head">
                    <h4 class="my-2">{{ $header }}</h4>
                </div>
            @endif
                <x-banner />
            {{ $slot }}
        </div><!--end container-->

        <!--footer section start-->
        <footer class="footer">
            2018 &copy; Syntra.
        </footer>
        <!--footer section end-->
    </div>
    <!--end body content-->
</section>
@stack('modals')

@livewireScripts
<!-- jQuery -->
<script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-migrate.js') }}"></script>
<script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/js/slidebars.min.js') }}"></script>


<!--app js-->
<script src="{{ asset('assets/js/jquery.app.js') }}"></script>
</body>
</html>

