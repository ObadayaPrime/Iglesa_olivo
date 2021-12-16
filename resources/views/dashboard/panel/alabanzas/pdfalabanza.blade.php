<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alabanzas</title>
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
          <h1 class="text-titles"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Lista de Alabanzas</h1>
        </div>
    </div>

    <div class="container-fluid">                 
        <div class="table-responsive">  
         
             <table id="miembro" class="table table-striped table-bordered">  
                  <thead>  
                       <tr>  
                        <th class="text-center">Id</th>
                        <th class="text-center">Nombre de Alabanza</th>
                        <th class="text-center">Tipo o Genero</th>
                        <th class="text-center">Letra</th>
                        <th class="text-center">Video</th>
                        <th class="text-center">Estado</th>
                        
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
                        

                    </tr>
                    @endforeach
                </tbody>
             </table>  
        </div>  
   </div> 
</body>


</html>