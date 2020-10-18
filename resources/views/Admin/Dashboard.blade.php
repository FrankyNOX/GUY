@extends("layouts.admin")


@section("Title")
    Dashboard | GUY
@stop

@section("content-body")
    <!-- Dashboard Analytics Start -->
    <section id="dashboard-analytics">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card bg-analytics text-white">
                    <div class="card-content">
                        <div class="card-body text-center">
                            <img src="{{asset("app-assets/images/elements/decore-left.png")}}" class="img-left" alt="
            card-img-left">
                            <img src="{{asset("app-assets/images/elements/decore-right.png")}}" class="img-right" alt="
            card-img-right">
                            <div class="avatar avatar-xl bg-primary shadow mt-0">
                                <div class="avatar-content">
                                    <i class="feather icon-award white font-large-1"></i>
                                </div>
                            </div>
                            <div class="text-center">
                                <h1 class="mb-2 text-white">Bienvenue {{auth()->user()->name}},</h1>
                                <p class="m-auto w-75">You have done <strong>57.6%</strong> more sales today. Check your new badge in your profile.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-primary p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-users text-primary font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1 mb-25">92.6k</h2>
                        <p class="mb-0">Subscribers Gained</p>
                    </div>
                    <div class="card-content">
                        <div id="subscribe-gain-chart"></div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-primary p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-users text-primary font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1 mb-25">92.6k</h2>
                        <p class="mb-0">Subscribers Gained</p>
                    </div>
                    <div class="card-content">
                        <div id="subscribe-gain-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <h2 class="text-bold-700 mt-1 mb-25"><a href="{{route("print")}}">Imprimer</a></h2>
                        <p class="mb-0">Orders Received</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard Analytics end -->
    @stop

@section("PageCss")
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/core/menu/menu-types/vertical-menu.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/core/colors/palette-gradient.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/pages/dashboard-analytics.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/pages/card-analytics.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/plugins/tour/tour.css")}}">
    @stop

@section("PageVendor")
    <script src="{{asset("app-assets/vendors/js/charts/apexcharts.min.js")}}"></script>
    <script src="{{asset("app-assets/vendors/js/extensions/tether.min.js")}}"></script>
    <script src="{{asset("app-assets/vendors/js/extensions/shepherd.min.js")}}"></script>
    @stop

@section("PageJs")
    {{--  <script src="{{asset("app-assets/js/scripts/pages/dashboard-analytics.js")}}"></script>  --}}
@stop

@section("VendorCSS")
<link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/css/vendors.min.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/css/charts/apexcharts.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/css/extensions/tether-theme-arrows.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/css/extensions/tether.min.css")}}">
<link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/css/extensions/shepherd-theme-default.css")}}">
@stop

@section("VendorJs")
    <script src="{{asset("app-assets/vendors/js/vendors.min.js")}}"></script>
    @stop
