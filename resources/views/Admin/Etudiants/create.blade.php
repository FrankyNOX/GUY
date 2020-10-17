@extends("layouts.admin")

@section("Title")
    Etudiants | Creation | GUY
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
                            <a href="{{route("Etudiants.index")}}">Etudiants</a>
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
                            <form method="POST" class="form form-vertical" action="{{ route('Etudiants.store') }}">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="first-name-icon">Nom</label>
                                                <div class="position-relative has-icon-left">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                     </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="first-name-icon">Lieu Naissance</label>
                                                <div class="position-relative has-icon-left">
                                                    <input id="lieu_naissance" type="text" class="form-control @error('lieu_naissance') is-invalid @enderror" name="lieu_naissance" value="{{ old('lieu_naissance') }}" required autocomplete="lieu_naissance" autofocus>
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
                                                <label for="first-name-icon">Date de Naissance</label>
                                                <div class="position-relative has-icon-left">
                                                    <input id="date_naissance" type="date" class="form-control @error('date_naissance') is-invalid @enderror" name="date_naissance" value="{{ old('date_naissance') }}" required autocomplete="date_naissance" autofocus>
                                                    @error('date_naissance')
                                                    <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                     </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="password-icon">Genre</label>
                                                <div class="position-relative has-icon-left">
                                                    <select id="genre" class="form-control @error('genre') is-invalid @enderror" name="genre">
                                                            <option value="M">Masculin</option>
                                                            <option value="F">Feminin</option>
                                                    </select>
                                                    @error('genre')
                                                    <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                     </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="first-name-icon">Nationalite</label>
                                                <div class="position-relative has-icon-left">
                                                    <input id="nationalite" type="text" class="form-control @error('nationalite') is-invalid @enderror" name="nationalite" value="{{ old('nationalite') }}" required autocomplete="nationalite" autofocus>
                                                    @error('date_naissance')
                                                    <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                     </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="first-name-icon">Matricule</label>
                                                <div class="position-relative has-icon-left">
                                                    <input id="matricule" type="text" class="form-control @error('matricule') is-invalid @enderror" name="matricule" value="{{ old('matricule') }}" required autocomplete="matricule" autofocus>
                                                    @error('matricule')
                                                    <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                     </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="password-icon">Salle</label>
                                                <div class="position-relative has-icon-left">
                                                    <select id="salle_id" class="form-control @error('salle_id') is-invalid @enderror" name="salle_id">
                                                        @foreach ($items as $salle)
                                                            <option value="{{$salle->id}}">{{ $salle->nom }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('salle_id')
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

