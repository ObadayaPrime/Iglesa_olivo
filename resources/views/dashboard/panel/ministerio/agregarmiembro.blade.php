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
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Agregar a Ministerio </h1>
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
												<label class="control-label">Ministerio</label>
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
<script src="{{ asset('scripts/diezmo/save.js') }}"></script>
@endpush