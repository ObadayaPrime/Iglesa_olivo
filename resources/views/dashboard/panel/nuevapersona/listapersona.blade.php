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
			  <h1 class="text-titles"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Lista  de Nuevas Personas </h1>
            </div>
            <div class="col-md-3 col-md-offset-1">
              <a href="{{ route('pdfpersona.imprimir') }}"> <button type="button" class="btn btn-outline-danger">
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
                    <div class="table-responsive">  
                     
                         <table id="persona" class="table table-striped table-bordered centered table-hover">  
                              <thead>  
                                   <tr>  
                                        <td class="danger"><strong>Nombre</strong></td>  
                                        <td class="danger"><strong>Apellido Paterno</strong></td>  
                                        <td class="danger"><strong>Apellido Materno</strong></td>  
                                        <td class="danger"><strong>CI</strong></td>
                                        <td class="danger"><strong>Telefono</strong></td>
                                        <td class="danger"><strong>Sexo</strong></td>    
                                        <td class="danger"><strong>Actividad</strong></td>
                                        <td class="danger"><strong>Direccion</strong></td>
                                        <td class="danger"><strong>Modificar</strong></td>
                                        <td class="danger"><strong>Eliminar</strong></td>
                                        @if (Auth::user()->isAdmin())
                                        <td class="danger"><strong>Traspaso</strong></td>
                                        @endif
                                   </tr>  
                              </thead>  
                              <tbody>
                                @foreach ($nuevapersona as $Personanueva)
                                <tr>
                                    <td>{{ $Personanueva->Nombre}}</td>
                                    <td>{{ $Personanueva->ApellidoP}}</td>
                                    <td>{{ $Personanueva->ApellidoM}}</td>
                                    <td>{{ $Personanueva->CIn}}</td>
                                    <td>{{ $Personanueva->Telefono}}</td>
                                    <td>{{ $Personanueva->Sexo}}</td>
                                    <td>{{ $Personanueva->Actividad}}</td>
                                    <td>{{ $Personanueva->Direccionn}}</td>
                                    <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
                                    <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    @if (Auth::user()->isAdmin())
                                    <td><a href="#!" class="btn btn-primary btn-raised btn-xs ci modal-show-traspaso" data-id="{{$Personanueva->CIn}}"><i class="zmdi zmdi-directions-run "></i></a></td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                         </table>  
                    </div>  
               </div> 
		
	</section>

    <div class="modal fade" tabindex="-1" role="dialog" id="Modal-traspaso">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Traspaso a Miembros</h4>
              </div>
              <div class="modal-body">
                  <form method="POST" id="form-traspaso" action="{{ route('listapersona.store.modal') }}">
                     @csrf
                    <div class="row">
                        <div class="col-xs-12 col-md-4 col-md-offset-1">
                        <div class="form-group">
                          <label class="control-label">Nombre</label>
                          <input required name="nombre" id="nombre" class="form-control" type="text">
                        </div>
                        </div>
                        <div class="col-xs-12 col-md-4 col-md-offset-1">
                        <div class="form-group">
                            <label class="control-label">Apellido Paterno</label>
                            <input required name="apellidoP" id="apellidoP" class="form-control" type="text">
                          </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-4 col-md-offset-1">
                          <div class="form-group">
                            <label class="control-label">Apellido Materno</label>
                            <input required name="apellidoM" id="apellidoM" class="form-control" type="text">
                          </div>
                        </div>
                        <div class="col-xs-12 col-md-4 col-md-offset-1">
                          <div class="form-group ">
                            <label class="control-label">Ci</label>
                            <input required name="ci" id="CI" class="form-control" type="text">
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-4 col-md-offset-1">
                          <div class="form-group">
                            <label class="control-label">telefono</label>
                            <input required name="telefono" id="telefono" type="number" class="form-control" type="text">
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
                        <div class="form-group">
                            <label class="control-label">Direccion</label>
                            <input required id="dirrecion" name="dirrecion" class="form-control" type="text">
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
    $('#persona').DataTable();
} );
</script>
@endpush
