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
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Registro de Alabanzas </h1>
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
										<form id="saveAlabanza" method="POST" action="{{ route('alabanza.store') }}">
											{{ csrf_field() }}
										<div class="row">
                                            <div class="col-xs-12 col-md-4 col-md-offset-1">
											<div class="form-group label-floating">
												<label class="control-label">Nombre de Alabanza</label>
												<input class="form-control" name="Nombre" type="text">
											  </div>
                                            </div>
                                              <div class="col-xs-12 col-md-4 col-md-offset-1">
                                                <div class="form-group">
                                                  <label class="control-label">Genero o Tipo</label>
                                                    <select required name="tipo" class="form-control">
                                                      <option>Jubilo</option>
                                                      <option>Adoracion</option>
                                                      <option>Cumbia</option>
                                                      <option>Especial</option>
                                                    </select>
                                                </div>
                                              </div>
                                              <div class="col-xs-12 col-md-4 col-md-offset-1">
                                                <div class="form-group">
                                                  <label class="control-label">Estado</label>
                                                    <select required name="tipo2" class="form-control">
                                                      <option>Ensayada</option>
                                                      <option>No Ensayada</option>
                                                    </select>
                                                </div>
                                              </div>
											</div>
										<div class="row">
										<div class="col-xs-12 col-md-4 col-md-offset-1">
											<div class="form-group label-floating">
												<label class="control-label">Letra</label>
												<input class="form-control" name="letra" type="text">
											  </div>
										</div>
                                        <div class="col-xs-12 col-md-4 col-md-offset-1">
											<div class="form-group label-floating">
												<label class="control-label">video</label>
												<input class="form-control" name="video" type="text">
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