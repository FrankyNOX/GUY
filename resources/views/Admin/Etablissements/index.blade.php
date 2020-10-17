@extends("layouts.admin")

@section("Title")
    Etablissements | GUY
@stop

@section("PageCss")
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/core/menu/menu-types/vertical-menu.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/core/colors/palette-gradient.css")}}">
@stop

@section("PageVendor")
    <script src="{{asset("app-assets/vendors/js/tables/datatable/pdfmake.min.js")}}"></script>
    <script src="{{asset("app-assets/vendors/js/tables/datatable/vfs_fonts.js")}}"></script>
    <script src="{{asset("app-assets/vendors/js/tables/datatable/datatables.min.js")}}"></script>
    <script src="{{asset("app-assets/vendors/js/tables/datatable/datatables.buttons.min.js")}}"></script>
    <script src="{{asset("app-assets/vendors/js/tables/datatable/buttons.html5.min.js")}}"></script>
    <script src="{{asset("app-assets/vendors/js/tables/datatable/buttons.print.min.js")}}"></script>
    <script src="{{asset("app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js")}}"></script>
    <script src="{{asset("app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js")}}"></script>
@stop

@section("PageJs")
    <script src="{{asset("app-assets/js/scripts/datatables/datatable.js")}}"></script>
@stop

@section("VendorCSS")
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/css/vendors.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/css/tables/datatable/datatables.min.css")}}">
@stop

@section("content-header")
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">GUY</h2>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">
                            Etablissements
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@stop

@section("content-body")
    <!-- Zero configuration table -->
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @include('Commun.flash')
                    <div class="card-header">
                        <h4 class="card-title">Tout les Etablissements</h4>
                        <a class="pull-right btn btn-primary" href="{{route("Etablissements.create")}}"><i class="feather icon-plus-circle"></i> <span class="menu-title" data-i18n="Email">Ajouter un etablissement</span></a>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table zero-configuration">
                                    <thead>
                                    <tr>
                                        <th class="text-left">Nom</th>
                                        <th class="text-center">Numero de telephone</th>
                                        <th class="text-left">Email</th>
                                        <th class="text-center">Region</th>
                                        <th class="text-left">Ville</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items as $etablissement)
                                    <tr>
                                        <td class="text-left">{{$etablissement->nom}}</td>
                                        <td class="text-center">{{$etablissement->numero}}</td>
                                        <td class="text-left">{{$etablissement->email}}</td>
                                        <td class="text-center">{{$etablissement->state->name}}</td>
                                        <td class="text-center">{{$etablissement->city->name}}</td>
                                        <td class="text-right">
                                            <a class="btn btn-success" href="{{route("Etablissements.edit",$etablissement->id)}}"><i class="feather icon-edit"></i></a>
                                            <form class="pull-right" action="{{route("Etablissements.destroy",$etablissement->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger" type="submit"><i class="feather icon-trash-2"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th class="text-left">Nom</th>
                                        <th class="text-center">Numero de telephone</th>
                                        <th class="text-left">Email</th>
                                        <th class="text-center">Region</th>
                                        <th class="text-left">Ville</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Zero configuration table -->
@stop

@section("VendorJs")
    <script src="{{asset("app-assets/vendors/js/vendors.min.js")}}"></script>
@stop
