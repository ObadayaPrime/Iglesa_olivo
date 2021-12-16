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
            <div class="row">
            <div class="col-xs-12 col-md-6">
			  <h1 class="text-titles"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Registro de Ofrendas</h1>
            </div>
            <div class="col-md-3 col-md-offset-1">
              <a href="{{ route('pdfofrenda.imprimir') }}"> <button type="button" class="btn btn-outline-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square-fill" viewBox="0 0 16 16">
                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5a.5.5 0 0 1 1 0z"></path>
                </svg>
                Descargar PDF
              </button></a>
			</div>
		</div>
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
									    <form id="saveOfrenda" method="POST" action="{{ route('ofrenda.store') }}">
											{{ csrf_field() }}
										<div class="row">
											<div class="col-xs-12 col-md-4 col-md-offset-1">
                                                <label class="control-label">Culto</label>
										        <select required name="Cultos" class="form-control">
										          <option>Sabado</option>
										          <option>Domingo en la Mañana</option>
                                                  <option>Domingo en la Noche</option>
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
												<input class="form-control" name="Monto" type="text">
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
								<table id="ingreso" class="table table-striped table-bordered centered table-hover">
									<thead>
										<tr>
											<th class="text-center">Cod</th>
											<th class="text-center">Usuario</th>
											<th class="text-center">Culto</th>
											<th class="text-center">Fecha</th>
											<th class="text-center">Monto Bs</th>
											<th class="text-center">Eliminar</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($ingresos as $ofrenda)
										<tr>
											<td>{{ $ofrenda->CodIngreso}}</td>
											<td>{{ $ofrenda->user}}</td>
											<td>{{ $ofrenda->Cultos}}</td>
											<td>{{ $ofrenda->Fecha}}</td>
											<td>{{ $ofrenda->Monto}}</td>	
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
<script src="{{ asset('scripts/ofrenda/save.js') }}"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script>
	$(document).ready(function() {
		$('#ingreso').DataTable();
	} );
	</script>
@endpush
