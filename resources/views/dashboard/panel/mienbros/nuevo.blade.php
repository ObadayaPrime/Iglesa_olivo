@extends('dashboard.layout.layout')
@push('css-header')

<link rel="stylesheet" href="{{asset('https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css')}}">
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
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">7</span>
					</a>
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
			  <h1 class="text-titles"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Registro de Miembros </h1>
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
									    <form id="saveMiembros" method="POST" action="{{ route('miembro.store') }}">
											{{ csrf_field() }}
											<div class="row">
											<div class="col-xs-12 col-md-4 col-md-offset-1">
									    	<div class="form-group label-floating">
											  <label class="control-label">Nombre</label>
											  <input required name="nombre" class="form-control" type="text">
											</div>
											</div>
											<div class="col-xs-12 col-md-4 col-md-offset-1">
											<div class="form-group label-floating">
												<label class="control-label">Apellido Paterno</label>
												<input required name="apelldoP" class="form-control" type="text">
											  </div>
											  </div>
											</div>
											<div class="row">
												<div class="col-xs-12 col-md-4 col-md-offset-1">
											  <div class="form-group label-floating">
												<label class="control-label">Apellido Materno</label>
												<input required name="apelldoM" class="form-control" type="text">
											  </div>
											</div>
											<div class="col-xs-12 col-md-4 col-md-offset-1">
											  <div class="form-group label-floating">
												<label class="control-label">Ci</label>
												<input required name="CI" type="number" class="form-control" type="text">
											  </div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-md-4 col-md-offset-1">
											  <div class="form-group label-floating">
												<label class="control-label">telefono</label>
												<input required name="telefono" type="number" class="form-control" type="text">
											  </div>
											</div>
											<div class="col-xs-12 col-md-4 col-md-offset-1">
											  <div class="form-group">
												<label class="control-label">Fecha de Nacimiento</label>
												<input required name="fechaNac" class="form-control" type="date">
											  </div>
											</div>
											</div>
										<div class="row">
											<div class="col-xs-12 col-md-4 col-md-offset-1">
											  <div class="form-group">
												<label class="control-label">Sexo</label>
												  <select required name="sexo" class="form-control">
													<option>Masculino</option>
													<option>Femenino</option>
												  </select>
											  </div>
											</div>
											<div class="col-xs-12 col-md-4 col-md-offset-1">
											<div class="form-group">
										      <label class="control-label">Estado</label>
										        <select required name="estado" class="form-control">
										          <option>Activo</option>
										          <option>Inactivo</option>
										        </select>
										    </div>
										</div>
										</div>
										<div class="row">
										<div class="col-xs-12 col-md-9 col-md-offset-1">
											<div class="form-group label-floating">
												<label class="control-label">Direccion</label>
												<input required name="dirrecion" class="form-control" type="text">
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
								<table id="employee_data" class="table table-striped table-bordered centered table-hover"style="width:100%">
									<thead>
										<tr>
											<th class="text-center">Nombre</th>
											<th class="text-center">Apellido Paterno</th>
											<th class="text-center">Apellido Materno</th>
											<th class="text-center">Ci</th>
											<th class="text-center">Telefono</th>
											<th class="text-center">Sexo</th>
											<th class="text-center">Fecha de Nacimiento</th>
											<th class="text-center">Estado</th>
											<th class="text-center">Direccion</th>
											<th class="text-center">Modificar</th>
											<th class="text-center">Eliminar</th>
											<th class="text-center">Agregar a Ministerio</th>

										</tr>
									</thead>
									<tbody>
										@foreach ($miembros as $miembro)
										<tr>
											<td>{{ $miembro->nombre}}</td>
											<td>{{ $miembro->apellidoP}}</td>
											<td>{{ $miembro->apellidoM}}</td>
											<td >{{ $miembro->Ci}}</td>
											<td>{{ $miembro->Telefono}}</td>
											<td>{{ $miembro->sexo}}</td>
											<td>{{ $miembro->FechaNac}}</td>
											<td>{{ $miembro->Estado}}</td>
											<td>{{ $miembro->Direccion}}</td>
											<td><a href="{{ route('miembro.edit',['id'=>$miembro->Ci]) }}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
											<td><a href="#!" id="{{ $miembro->Ci}}" class="btn btn-primary btn-raised btn-xs btn-modal-help ci"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i></a></td>

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

	<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">registrar nuevo</h4>
			    </div>
			    <div class="modal-body">
					<form id="saveDetalleMinisterio" method="POST" action="{{ route('detalle_ministerio.store') }}">
						{{ csrf_field() }}
					<div class="row">
						<input type="text" name="Ci" id="ci" hidden>
						<div class="col-xs-12 col-md-4 col-md-offset-1">
							<label class="control-label">Ministerio</label>
							<select required name="CodMinist" class="form-control">
							 @foreach ($ministerios as $ministerio)
							 <option value="{{$ministerio->CodMinist}}">{{$ministerio->NombreMinist}}</option>
							 @endforeach
							</select>
						</div>
						<div class="col-xs-12 col-md-4 col-md-offset-1">
						  <div class="form-group">
							<label class="control-label">Fecha</label>
							<input class="form-control" name="Fecha" type="date" required>
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
	
@endsection
@push('javascript-form')
<script src="{{ asset('scripts/miembros/save.js') }}"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#employee_data').DataTable();
} );
</script>
@endpush
