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
			  <h1 class="text-titles"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Modificar Diezmo </h1>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab">Modificar</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form id="updateDiezmo" method="POST" action="{{ route('diezmos.update',['id'=>$diezmo->Cod]) }}">
											{{ csrf_field() }}

                                            <div class="row">
                                                <div class="col-xs-12 col-md-4 col-md-offset-1">
                                                    <label class="control-label">Nombre</label>
                                                    <select required name="Ci" value="{{ $diezmo->Ci }}" class="form-control">
                                                     @foreach ($miembros as $miembro)
                                                     <option value="{{$diezmo->Ci}}"></option>
                                                     @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-xs-12 col-md-4 col-md-offset-1">
                                                  <div class="form-group">
                                                    <label class="control-label">Fecha</label>
                                                    <input class="form-control" name="Fecha" value="{{ $diezmo->Fecha }}" type="date">
                                                  </div>
                                                </div>
                                                </div>
                                            <div class="row">
                                            <div class="col-xs-12 col-md-4 col-md-offset-1">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Monto</label>
                                                    <input class="form-control" name="Bs"  value="{{ $diezmo->Bs }}" type="number">
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