<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ministerio</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
    h1{
    text-align: center;
    text-transform: uppercase;
    }
    .contenido{
    font-size: 20px;
    }
    </style>
</head>
<body>
  
    <div class="container-fluid">
        <div class="page-header">
          <h1 class="text-titles"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Lista de Ministerio </h1>
        </div>
    </div>

    <div class="container-fluid">                 
        <div class="table-responsive">  
         
             <table id="miembro" class="table table-striped table-bordered centered table-hover">  
                  <thead>  
                       <tr>  
                        <th class="text-center danger">Cod</th>
                        <th class="text-center danger">Nombre</th>
                        <th class="text-center danger">Telefono</th>
                        <th class="text-center danger">Fecha de Creacion</th>
                        <th class="text-center danger">Direccion</th>
                            
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

                    </tr>
                    @endforeach
                </tbody>
             </table>  
        </div>  
   </div> 
</body>


</html>