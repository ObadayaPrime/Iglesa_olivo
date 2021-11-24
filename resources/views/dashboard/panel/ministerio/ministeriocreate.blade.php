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
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Registro de Ministerio </h1>
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
										<form id="saveMinisterio" method="POST" action="{{ route('ministerio.store') }}">
											{{ csrf_field() }}
											<div class="row">
											<div class="col-xs-12 col-md-4 col-md-offset-1">
									    	<div class="form-group label-floating">
											  <label class="control-label">Codigo</label>
											  <input class="form-control" name="CodMinist" type="text">
											</div>
											</div>
											<div class="col-xs-12 col-md-4 col-md-offset-1">
											<div class="form-group label-floating">
												<label class="control-label">Nombre de Ministerio</label>
												<input class="form-control" name="NombreMinist" type="text">
											  </div>
											  </div>
											</div>
										<div class="row">
											<div class="col-xs-12 col-md-4 col-md-offset-1">
											  <div class="form-group label-floating">
												<label class="control-label">telefono</label>
												<input class="form-control" name="Telefono" type="text">
											  </div>
											</div>
											<div class="col-xs-12 col-md-4 col-md-offset-1">
											  <div class="form-group">
												<label class="control-label">Fecha de Creacion</label>
												<input class="form-control" name="FechaR" type="date">
											  </div>
											</div>
											</div>
										<div class="row">
										<div class="col-xs-12 col-md-9 col-md-offset-1">
											<div class="form-group label-floating">
												<label class="control-label">Direccion</label>
												<input class="form-control" name="DireccionM" type="text">
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
											<th class="text-center">Cod</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Telefono</th>
											<th class="text-center">Fecha de Creacion</th>
											<th class="text-center">Direccion</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($ministerios as $ministerio)
										<tr>
											<td>{{ $ministerio->CodMinist}}</td>
											<td>{{ $ministerio->NombreMinist}}</td>
											<td>{{ $ministerio->Telefono}}</td>
											<td>{{ $ministerio->FechaR}}</td>
											<td>{{ $ministerio->DireccionM}}</td>
											
											<td><a href="{{ route('ministerio.edit',['id'=>$ministerio->CodMinist]) }}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										@endforeach
										
									</tbody>
								</table>
								<ul class="pagination pagination-sm">
								  	<li class="disabled"><a href="#!">«</a></li>
								  	<li class="active"><a href="#!">1</a></li>
								  	<li><a href="#!">2</a></li>
								  	<li><a href="#!">3</a></li>
								  	<li><a href="#!">4</a></li>
								  	<li><a href="#!">5</a></li>
								  	<li><a href="#!">»</a></li>
								</ul>
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@push('javascript-form')
<script src="{{ asset('scripts/ministerio/save.js') }}"></script>
@endpush