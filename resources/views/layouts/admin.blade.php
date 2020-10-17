<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>@yield("Title")</title>
    <link rel="apple-touch-icon" href="{{asset("app-assets/images/ico/apple-icon-120.png")}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("app-assets/images/ico/favicon.ico")}}">
    {{--  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">  --}}

    @yield("VendorCSS")
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/bootstrap.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/bootstrap-extended.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/colors.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/components.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/themes/dark-layout.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/themes/semi-dark-layout.css")}}">
    <!-- BEGIN: Page CSS-->
    @yield("PageCss")
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/style.css")}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none">
                                <span class="user-name text-bold-600">{{auth()->user()->name}}</span>
                            </div>
                            <span><img class="round" src="{{asset("app-assets/images/portrait/small/avatar-s-11.jpg")}}" alt="avatar" height="40" width="40"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route("Dashboard")}}">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">GUY</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="active nav-item">
                <a href="{{route("Dashboard")}}"><i class="feather icon-mail"></i><span class="menu-title">Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a href="{{route("Etablissements.index")}}"><i class="feather icon-mail"></i><span class="menu-title">Etablissements</span></a>
            </li>
            <li class="nav-item">
                <a href="{{route("Semestres.index")}}"><i class="feather icon-mail"></i><span class="menu-title">Semestres</span></a>
            </li>
            <li class="nav-item">
                <a href="{{route("Filieres.index")}}"><i class="feather icon-mail"></i><span class="menu-title">Fileres</span></a>
            </li>
            <li class="nav-item">
                <a href="{{route("Cycles.index")}}"><i class="feather icon-mail"></i><span class="menu-title">Cycles</span></a>
            </li>
            <li class="nav-item">
                <a href="{{route("Options.index")}}"><i class="feather icon-mail"></i><span class="menu-title">Options</span></a>
            </li>
            <li class="nav-item">
                <a href="{{route("Salles.index")}}"><i class="feather icon-mail"></i><span class="menu-title">Salles</span></a>
            </li>
            <li class="nav-item">
                <a href="{{route("UE.index")}}"><i class="feather icon-mail"></i><span class="menu-title">UE</span></a>
            </li>
            <li class="nav-item">
                <a href="{{route("UV.index")}}"><i class="feather icon-mail"></i><span class="menu-title">UV</span></a>
            </li>
            <li class="nav-item">
                <a href="{{route("Etudiants.index")}}"><i class="feather icon-mail"></i><span class="menu-title">Etudiants</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            @yield("content-header")
        </div>
        <div class="content-body">
            @yield("content-body")
        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2019<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
@yield("VendorJs")
<!-- BEGIN Vendor JS-->


<!-- BEGIN: Page Vendor JS-->
@yield("PageVendor")
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset("app-assets/js/core/app-menu.js")}}"></script>
<script src="{{asset("app-assets/js/core/app.js")}}"></script>
<script src="{{asset("app-assets/js/scripts/components.js")}}"></script>
<!-- END: Theme JS-->


<!-- BEGIN: Page JS-->
@yield("PageJs")
<!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>
