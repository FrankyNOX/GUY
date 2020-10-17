@extends("layouts.admin")

@section("Title")
    Utilisateurs | Creation| Kassap
@stop

@section("PageCss")
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/core/menu/menu-types/vertical-menu.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/core/colors/palette-gradient.css")}}">
@stop


@section("PageJs")
    <script src="{{asset("app-assets/js/scripts/datatables/datatable.js")}}"></script>
@stop

@section("VendorCSS")
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/css/vendors.min.css")}}">
@stop

@section("content-header")
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Kassap</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route("Users.index")}}">Utilisateurs</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Modification
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@stop

@section("content-body")
    <!-- Basic Vertical form layout section start -->
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-10 offset-1 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Modification d'un utilisateur</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            @include('Commun.flash')
                            <form method="POST" class="form form-vertical" action="{{ route('Users.update',$user->id) }}">
                                @csrf
                                @method('put')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="first-name-icon">Name</label>
                                                <div class="position-relative has-icon-left">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                     </span>
                                                    @enderror
                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="email-id-icon">Email</label>
                                                <div class="position-relative has-icon-left">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                             <strong>{{ $message }}</strong>
                                                      </span>
                                                    @enderror
                                                    <div class="form-control-position">
                                                        <i class="feather icon-mail"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary pull-right mr-1 mb-1"><i class="feather icon-save"></i> Enregister </button>
                                            <button type="reset" class="btn btn-outline-warning pull-right mr-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic Vertical form layout section end -->
@stop


@section("VendorJs")
    <script src="{{asset("app-assets/vendors/js/vendors.min.js")}}"></script>
@stop
