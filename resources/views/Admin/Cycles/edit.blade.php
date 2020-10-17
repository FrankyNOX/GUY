@extends("layouts.admin")

@section("Title")
    Cycles | Creation | GUY
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
                           <a href="{{route("Cycles.index")}}">Cycles</a>
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
                        <h4 class="card-title">Edition d'un cycle</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            @include('Commun.flash')
                            <form method="POST" class="form form-vertical" action="{{ route('Cycles.update',$cycle->id) }}">
                                @csrf
                                @method("PUT")
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="first-name-icon">Nom</label>
                                                <div class="position-relative has-icon-left">
                                                    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ $cycle->nom }}" required autocomplete="nom" autofocus>
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
                                                <label for="password-icon">Etablissement</label>
                                                <div class="position-relative has-icon-left">
                                                <select id="filiere_id" class="form-control @error('filiere_id') is-invalid @enderror" name="filiere_id">
                                                 <option value="{{$cycle->filiere->id}}">{{ $cycle->filiere->nom }}</option>
                                                @foreach ($items as $filiere)
                                                    <option value="{{$filiere->id}}">{{ $filiere->nom }}</option>
                                                @endforeach
                                               </select>
                                               @error('filiere_id')
                                                     <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                     </span>
                                                     @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary pull-right mr-1 mb-1"><i class="feather icon-save"></i> Mettre a jour </button>
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

