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
			  <h1 class="text-titles"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Modificar Miemnbros </h1>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab">Nuevo</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form id="updateMiembros" method="POST" action="{{ route('miembro.update',['id'=>$miembro->Ci]) }}">
											{{ csrf_field() }}
											<div class="row">
											<div class="col-xs-12 col-md-4 col-md-offset-1">
									    	<div class="form-group label-floating">
											  <label class="control-label">Nombre</label>
											  <input required name="nombre" value="{{ $miembro->nombre }}" class="form-control" type="text">
											</div>
											</div>
											<div class="col-xs-12 col-md-4 col-md-offset-1">
											<div class="form-group label-floating">
												<label class="control-label">Apellido Paterno</label>
												<input required name="apellidoP" value="{{ $miembro->apellidoP }}" class="form-control" type="text">
											  </div>
											  </div>
											</div>
											<div class="row">
												<div class="col-xs-12 col-md-4 col-md-offset-1">
											  <div class="form-group label-floating">
												<label class="control-label">Apellido Materno</label>
												<input required name="apellidoM" value="{{ $miembro->apellidoM }}" class="form-control" type="text">
											  </div>
											</div>
											<div class="col-xs-12 col-md-4 col-md-offset-1">
											  <div class="form-group label-floating">
												<label class="control-label">Ci</label>
												<input required name="Ci" type="number" value="{{ $miembro->Ci }}" class="form-control" type="text" readonly>
											  </div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 col-md-4 col-md-offset-1">
											  <div class="form-group label-floating">
												<label class="control-label">telefono</label>
												<input required name="Telefono" type="number" value="{{ $miembro->Telefono }}" class="form-control" type="text">
											  </div>
											</div>
											<div class="col-xs-12 col-md-4 col-md-offset-1">
											  <div class="form-group">
												<label class="control-label">Fecha de Nacimiento</label>
												<input required name="FechaNac" value="{{ $miembro->FechaNac }}" class="form-control" type="date">
											  </div>
											</div>
											</div>
										<div class="row">
											<div class="col-xs-12 col-md-4 col-md-offset-1">
											  <div class="form-group">
												<label class="control-label">Sexo</label>
												  <select required name="sexo" class="form-control">
													@if ($miembro->sexo=='Masculino')
													<option selected value="Masculino">Masculino</option>
													<option value="Femenino">Femenino</option>
													@else
													<option value="Masculino" >Masculino</option>
													<option value="Femenino" selected>Femenino</option>
													@endif												
												  </select>
											  </div>
											</div>
											<div class="col-xs-12 col-md-4 col-md-offset-1">
											<div class="form-group">
										      <label class="control-label">Estado</label>
										        <select required name="Estado" value="{{ $miembro->Estado }}" class="form-control">
										          <option {{$miembro->Estado=='Activo' ? 'selected' : ''}} value="Activo">Activo</option>
										          <option {{$miembro->Estado=='Inactivo' ? 'selected' : ''}} value="Inactivo">Inactivo</option>
										        </select>
										    </div>
										</div>
										</div>
										<div class="row">
										<div class="col-xs-12 col-md-9 col-md-offset-1">
											<div class="form-group label-floating">
												<label class="control-label">Direccion</label>
												<input required name="Direccion" value="{{ $miembro->Direccion }}" class="form-control" type="text">
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
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@push('javascript-form')
<script src="{{ asset('scripts/miembros/save.js') }}"></script>
@endpush