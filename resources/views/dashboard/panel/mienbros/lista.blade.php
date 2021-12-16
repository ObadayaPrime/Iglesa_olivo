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
			  <h1 class="text-titles"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Lista de Miembros </h1>
            </div>
            <div class="col-md-3 col-md-offset-1">
              <a href="{{ route('pdfmiembros.imprimir') }}"> <button type="button" class="btn btn-outline-danger">
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
                     
                         <table id="miembro" class="table table-striped table-bordered centered table-hover">  
                              <thead>  
                                   <tr>  
                                        <td class="danger"><strong>Nombre</strong></td>  
                                        <td class="danger"><strong>Apellido Paterno</strong></td>  
                                        <td class="danger"><strong>Apellido Materno</strong></td>  
                                        <td class="danger"><strong>CI</strong></td>
                                        <td class="danger"><strong>Telefono</strong></td>
                                        <td class="danger"><strong>Sexo</strong></td>    
                                        <td class="danger"><strong>Fecha de Nacimiento</strong></td>
                                        <td class="danger"><strong>Estado</strong></td>
                                        <td class="danger"><strong>Direccion</strong></td>
                                        <td class="danger"><strong>Modificar</strong></td>
                                        <td class="danger"><strong>Eliminar</strong></td>
                                         <td class="danger"><strong>+ Ministerio</strong></td>
    
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
                                    <td><a href="#!" data-id="{{ $miembro->Ci}}" class="btn btn-primary btn-raised btn-xs ci  modal-show-ministerio-persona"><i class="zmdi zmdi-account-add zmdi-hc-fw "></i></a></td>

                                </tr>
                                @endforeach
                            </tbody>
                         </table>  
                    </div>  
               </div> 
		
	</section>
    <div class="modal fade" id="modal-ministerio-persona" tabindex="-1" role="dialog" id="Dialog-Help">
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
    $('#miembro').DataTable();
} );
</script>
@endpush
