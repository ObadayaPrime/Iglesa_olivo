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
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Registro de Diezmos </h1>
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
										<form id="saveDiezmo" method="POST" action="{{ route('diezmos.store') }}">
											{{ csrf_field() }}
										<div class="row">
											<div class="col-xs-12 col-md-4 col-md-offset-1">
												<label class="control-label">Nombre</label>
												<select required name="Ci" class="form-control">
												 @foreach ($miembros as $miembro)
												 <option value="{{$miembro->Ci}}">{{$miembro->nombre}}</option>
												 @endforeach
												</select>
											</div>
											<div class="col-xs-12 col-md-4 col-md-offset-1">
											  <div class="form-group">
												<label class="control-label">Fecha</label>
												<input class="form-control" name="Fecha" type="date">
											  </div>
											</div>
											</div>
										<div class="row">
										<div class="col-xs-12 col-md-4 col-md-offset-1">
											<div class="form-group label-floating">
												<label class="control-label">Monto</label>
												<input class="form-control" name="Bs" type="text">
											  </div>
										</div>
                                        <div class="col-xs-12 col-md-4 col-md-offset-1">
											<div class="form-group label-floating">
												<label class="control-label">Dolar</label>
												<input class="form-control" name="Dolar" type="text">
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
								<table id="diezmo" class="table table-striped table-bordered centered table-hover">  
									<thead>
										<tr>
											<th class="text-center">Cod</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Apellido</th>
											<th class="text-center">Ci</th>
											<th class="text-center">Fecha</th>
											<th class="text-center">Monto Bs</th>
                                            <th class="text-center">Dolar</th>
											<th class="text-center">eliminar</th>

										</tr>
									</thead>
									<tbody>
										@foreach ($diezmos as $diezmo)
										<tr>
											<td>{{ $diezmo->Cod}}</td>
											<td>{{ $diezmo->nombre}}</td>
											<td>{{ $diezmo->apellidoP}}</td>
											<td>{{ $diezmo->Ci}}</td>
											<td>{{ $diezmo->Fecha}}</td>
											<td>{{ $diezmo->Bs}}</td>
											<td>{{ $diezmo->Dolar}}</td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
											
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
<script src="{{ asset('scripts/diezmo/save.js') }}"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script>
	$(document).ready(function() {
		$('#diezmo').DataTable();
	} );
	</script>
@endpush