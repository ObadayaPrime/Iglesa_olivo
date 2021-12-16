@extends('dashboard.layout.layout')
@push('css-header')

@endpush
@section('content')
    <!-- Content page-->
    <section class="full-box dashboard-contentPage">
        <!-- NavBar -->
        <nav class="full-box dashboard-Navbar">
            <ul class="full-box list-unstyled text-right">
                <li class="pull-left">
                    <a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
                </li>
               
                <li>
                    <a href="#!" class="btn-search">
                        <i class="zmdi zmdi-search"></i>
                    </a>
                </li>
                <li>
                    <a href="#!" class="btn-modal-help">
                        <i class="zmdi zmdi-help-outline"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Content page -->
        <div class="container-fluid">
            <div class="page-header">
                <h1 class="text-titles"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Registro de Nueva Persona </h1>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                        <li class="active"><a href="#new" data-toggle="tab">Nuevo</a></li>
                        <li><a href="#list" data-toggle="tab">Lista</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="new">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12 col-md-10 col-md-offset-1">
                                        <form id="savePersona" method="POST" action="{{ route('persona.store') }}">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-xs-12 col-md-4 col-md-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Nombre</label>
                                                        <input required name="Nombre" class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-md-4 col-md-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Apellido Paterno</label>
                                                        <input required name="ApelldoP" class="form-control" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-md-4 col-md-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Apellido Materno</label>
                                                        <input required name="ApelldoM" class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-md-4 col-md-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Ci</label>
                                                        <input required name="CIn" type="number" class="form-control"
                                                            type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-md-4 col-md-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">telefono</label>
                                                        <input required name="Telefono" type="number" class="form-control"
                                                            type="text">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-md-4 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label class="control-label">Sexo</label>
                                                        <select required name="Sexo" class="form-control">
                                                            <option>Masculino</option>
                                                            <option>Femenino</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-md-4 col-md-offset-1">
                                                    <div class="form-group">
                                                        <label class="control-label">Actividad</label>
                                                        <select required name="Actividad" class="form-control">
															
                                                            @foreach ($Actividades as $actividad)
                                                                <option value="{{ $actividad->IDac }}">{{ $actividad->NombreActi }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-md-4 col-md-offset-1">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Direccion</label>
                                                        <input required name="Dirrecionn" class="form-control"
                                                            type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-center">
										    	<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
										    </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list">
                            <div class="table-responsive">
                                <table class="table table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Nombre</th>
                                            <th class="text-center">Apellido Paterno</th>
                                            <th class="text-center">Apellido Materno</th>
                                            <th class="text-center">Ci</th>
                                            <th class="text-center">Telefono</th>
                                            <th class="text-center">Sexo</th>
                                            <th class="text-center">Actividad</th>
                                            <th class="text-center">Direccion</th>
                                            <th class="text-center">Update</th>
                                            <th class="text-center">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($nuevapersona as $Personanueva)
                                            <tr>
                                                <td>{{ $Personanueva->Nombre }}</td>
                                                <td>{{ $Personanueva->ApellidoP }}</td>
                                                <td>{{ $Personanueva->ApellidoM }}</td>
                                                <td>{{ $Personanueva->CIn }}</td>
                                                <td>{{ $Personanueva->Telefono }}</td>
                                                <td>{{ $Personanueva->Sexo }}</td>
                                                <td>{{ $Personanueva->Actividad }}</td>
                                                <td>{{ $Personanueva->Direccionn }}</td>
                                                <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i
                                                            class="zmdi zmdi-refresh"></i></a></td>
                                                <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i
                                                            class="zmdi zmdi-delete"></i></a></td>


                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('javascript-form')
    <script src="{{ asset('scripts/persona/save.js') }}"></script>
@endpush
