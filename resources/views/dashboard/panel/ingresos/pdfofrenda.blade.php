<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ofrenda</title>
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
    }
    </style>
</head>
<body>
  
    <div class="container-fluid">
        <div class="page-header">
          <h1 class="text-titles"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Lista de Ofrenda </h1>
        </div>
    </div>

    <div class="container-fluid">                 
        <div class="table-responsive">  
         
             <table id="miembro" class="table table-striped table-bordered centered table-hover">  
                  <thead>  
                       <tr>  
                        <th class="text-center">Cod</th>
						<th class="text-center">Usuario</th>
						<th class="text-center">Culto</th>
						<th class="text-center">Fecha</th>
						<th class="text-center">Monto Bs</th>
											

                       </tr>  
                  </thead>  
                  <tbody>
                    @foreach ($ingresos as $ofrenda)
                    <tr>
                        <td>{{ $ofrenda->CodIngreso}}</td>
                        <td>{{ $ofrenda->user}}</td>
                        <td>{{ $ofrenda->Cultos}}</td>
                        <td>{{ $ofrenda->Fecha}}</td>
                        <td>{{ $ofrenda->Monto}}</td>
                        

                    </tr>
                    @endforeach
                </tbody>
             </table>  
        </div>  
   </div> 
</body>


</html>