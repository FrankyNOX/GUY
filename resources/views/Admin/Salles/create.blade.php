@extends("layouts.admin")

@section("Title")
    Salles | Creation | GUY
@stop

@section("PageCss")
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/core/menu/menu-types/vertical-menu.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/core/colors/palette-gradient.css")}}">
@stop


@section("VendorCSS")
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/css/vendors.min.css")}}">
@stop

@section("content-header")
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">GUY</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route("Options.index")}}">Salles</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Creation
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
                        <h4 class="card-title">Creation d'une salle</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            @include('Commun.flash')
                            <form method="POST" class="form form-vertical" action="{{ route('Salles.store') }}">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="first-name-icon">Nom</label>
                                                <div class="position-relative has-icon-left">
                                                    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                                                    @error('nom')
                                                    <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                     </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="first-name-icon">Niveau</label>
                                                <div class="position-relative has-icon-left">
                                                    <input id="niveau" type="number" class="form-control @error('niveau') is-invalid @enderror" name="niveau" value="{{ old('niveau') }}" required autocomplete="niveau" autofocus>
                                                    @error('niveau')
                                                    <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                     </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="password-icon">Option</label>
                                                <div class="position-relative has-icon-left">
                                                    <select id="option_id" class="form-control @error('option_id') is-invalid @enderror" name="option_id">
                                                        @foreach ($items as $option)
                                                            <option value="{{$option->id}}">{{ $option->nom }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('option_id')
                                                    <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                     </span>
                                                    @enderror
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

