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
			  <h1 class="text-titles"><i class="zmdi zmdi-menu zmdi-hc-fw"></i> Lista de Usuario </h1>
			</div>
		</div>
        <div class="container-fluid col-xs-10 col-md-10 col-md-offset-1">  
                         
                    <div class="table-responsive">  
                     
                         <table id="ministerio" class="table table-striped table-bordered centered table-hover">  
                            <thead>
                                <tr>
                                    <th class="text-center danger">N</th>
                                    <th class="text-center danger">Usuario</th>
                                    <th class="text-center danger">Contraseña</th>
                                    <th class="text-center danger">Correo</th>
                                    <th class="text-center danger">Ci</th>
                                    <th class="text-center danger">Rol</th>
                                    <th class="text-center danger">Editar</th>
                                    <th class="text-center danger">Eliminar</th>
                                </tr>
                            </thead>
                              <tbody>
                                @foreach ($admin as $admi)
                                <tr>
                                    <td>{{ $admin->id}}</td>
                                    <td>{{ $admin->user}}</td>
                                    <td>{{ $admin->password}}</td>
                                    <td>{{ $admin->email}}</td>
                                    <td>{{ $admin->Ci}}</td>
                                    <td>{{ $admin->rol}}</td>
                                    <td><a href="{{ route('ministerio.edit',['id'=>$ministerio->CodMinist]) }}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
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
    $('#ministerio').DataTable();
} );
</script>
@endpush
