@extends('dashboard.layout.layout')
@push('css-header')
<link rel="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
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
			  <h1 class="text-titles"><i class="zmdi zmdi-menu zmdi-hc-fw"></i> Lista de Ministerio </h1>
            </div>
            <div class="col-md-3 col-md-offset-1">
              <a href="{{ route('pdfministerio.imprimir') }}"> <button type="button" class="btn btn-outline-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square-fill" viewBox="0 0 16 16">
                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5a.5.5 0 0 1 1 0z"></path>
                </svg>
                Descargar PDF
              </button></a>
			</div>
		</div>
            </div>
        </div>
        <div class="container-fluid col-xs-10 col-md-10 col-md-offset-1">  
                         
                    <div class="table-responsive">  
                     
                         <table id="ministerio" class="table table-striped table-bordered centered table-hover">  
                            <thead>
                                <tr>
                                    <th class="text-center danger">Cod</th>
                                    <th class="text-center danger">Nombre</th>
                                    <th class="text-center danger">Telefono</th>
                                    <th class="text-center danger">Fecha de Creacion</th>
                                    <th class="text-center danger">Direccion</th>
                                    <th class="text-center danger">Editar</th>
                                    <th class="text-center danger">Eliminar</th>
                                    <th class="text-center danger">integrantes</th>
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
                                    <td><a href="{{ route('listadetalle.show',['id'=>$ministerio->CodMinist]) }}" class="btn btn-primary btn-raised btn-xs"><i class="zmdi zmdi-menu"></i></a></td>

                                </tr>
                                @endforeach
                            </tbody>
                         </table>
                     
                    </div>  
               </div> 
		
	</section>
    

	
@endsection
@push('javascript-form')
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function() {
    $('#ministerio').DataTable();
} );
</script>
@endpush
