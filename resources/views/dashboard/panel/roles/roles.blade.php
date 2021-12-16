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
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Registro de Roles y Permisos </h1>
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
										<form id="saveAdmin" method="POST" action="{{ route('admin.store') }}">
											{{ csrf_field() }}
											<div class="row">
											<div class="col-xs-12 col-md-4 col-md-offset-1">
									    	<div class="form-group label-floating">
											  <label class="control-label">Nombre</label>
											  <input required name="user" class="form-control" type="text">
											</div>
											</div>
											</div>
											<div class="col-xs-12 col-md-4 col-md-offset-1">
                                                <div class="form-group">
                                                  <label class="control-label">Rol</label>
                                                    <select required name="rol" class="form-control">
                                                      <option>1</option>
                                                      <option>2</option>
                                                    </select>
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
								<table id="ministerio" class="table table-striped table-bordered centered table-hover">  
									<thead>
										<tr>
											<th class="text-center danger">N</th>
											<th class="text-center danger">Nombre</th>
                                            <th class="text-center danger">Estado</th>
											<th class="text-center danger">Editar</th>
											<th class="text-center danger">Eliminar</th>
										</tr>
									</thead>
									  <tbody>
										@foreach ($admin as $admi)
										<tr>
											<td>{{ $admi->id}}</td>
											<td>{{ $admi->user}}</td>
											<td>{{ $admi->password}}</td>
											<td>{{ $admi->email}}</td>
											<td>{{ $admi->Ci}}</td>
											<td>{{ $admi->rol}}</td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
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
<script src="{{ asset('scripts/admin/save.js') }}"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script>
	$(document).ready(function() {
		$('#ministerio').DataTable();
	} );
	</script>
@endpush