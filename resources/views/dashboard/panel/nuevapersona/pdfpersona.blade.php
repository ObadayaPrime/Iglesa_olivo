<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nueva Persona</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
    h1{
    text-align: center;
    text-transform: uppercase;
    }
    .contenido{
    font-size: 20px;
    text-align: center;
    }
    table{
    text-align: center;
    text-transform: uppercase;  
    font-size: 10px;
    }
    </style>
</head>
<body>
  
    <div class="container-fluid">
        <div class="page-header">
          <h1 class="text-titles"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Lista de Nuevas Personas </h1>
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
                        <td class="danger"><strong>Actividad</strong></td>
                        <td class="danger"><strong>Direccion</strong></td>
											

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
                        

                    </tr>
                    @endforeach
                </tbody>
             </table>  
        </div>  
   </div> 
</body>


</html>