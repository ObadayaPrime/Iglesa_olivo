<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Miembros</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
    h1{
    text-align: center;
    text-transform: uppercase;
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
          <h1 class="text-titles"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Lista de Miembros </h1>
        </div>
    </div>

    <div class="container-fluid">                 
        <div class="table-responsive">  
         
             <table id="miembro" class="table table-striped table-bordered">  
                  <thead>  
                       <tr>  
                            <td><strong>Nombre</strong></td>  
                            <td ><strong>Apellido Paterno</strong></td>  
                            <td ><strong>Apellido Materno</strong></td>  
                            <td ><strong>CI</strong></td>
                            <td ><strong>Telefono</strong></td>
                            <td ><strong>Sexo</strong></td>    
                            <td ><strong>Fecha de Nacimiento</strong></td>
                            <td ><strong>Estado</strong></td>
                            <td ><strong>Direccion</strong></td>
                            

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
                        

                    </tr>
                    @endforeach
                </tbody>
             </table>  
        </div>  
   </div> 
</body>


</html>