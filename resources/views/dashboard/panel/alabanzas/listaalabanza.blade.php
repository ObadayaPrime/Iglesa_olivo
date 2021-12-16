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
			  <h1 class="text-titles"><i class="zmdi zmdi-menu zmdi-hc-fw"></i> Lista de Alabanza </h1>
            </div>
            <div class="col-md-3 col-md-offset-1">
              <a href="{{ route('pdfalabanza.imprimir') }}"> <button type="button" class="btn btn-outline-danger">
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
                     
                         <table id="diezmo" class="table table-striped table-bordered centered table-hover">  
                            <thead>
                                <tr>
                                    <th class="text-center">Id</th>
                                    <th class="text-center">Nombre de Alabanza</th>
                                    <th class="text-center">Tipo o Genero</th>
                                    <th class="text-center">Letra</th>
                                    <th class="text-center">Video</th>
                                    <th class="text-center">Estado</th>
                                    <th class="text-center">Modificar</th>
                                    <th class="text-center">eliminar</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alabanza as $alabanza)
                                <tr>
                                    <td>{{ $alabanza->ID}}</td>
                                    <td>{{ $alabanza->Nombre}}</td>
                                    <td>{{ $alabanza->tipo}}</td>
                                    <td>{{ $alabanza->letra}}</td>
                                    <td> <a class="btn btn-success glyphicon glyphicon-play-circle" href="{{ $alabanza->video}}">Reproducir</a></td>
                                    <td>{{ $alabanza->tipo2}}</td>
                                    <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
                                    <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    
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
    $('#diezmo').DataTable();
} );
</script>
@endpush
