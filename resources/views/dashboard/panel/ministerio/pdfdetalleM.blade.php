<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ministerio</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        h1 {
            text-align: center;
            text-transform: uppercase;
        }

        .contenido {
            font-size: 20px;
        }

    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="page-header">
            <h3 class="text-titles"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Lista de Miembros que Pertenecen
                al {{ $ministerio->NombreMinist }} </h3>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <div class="table-responsive">

            <table id="miembro" class="table table-striped table-bordered centered table-hover">
                <thead>
                    <tr>
                        <th class="text-center danger">Nombre</th>
                        <th class="text-center danger">Apellido</th>
                        <th class="text-center danger">Ci</th>
                        <th class="text-center danger">Fehca de Ingreso</th>
                        <th class="text-center danger">Direccion</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->nombre }}</td>
                        <td>{{ $usuario->apellidoP }}</td>
                        <td>{{ $usuario->Ci }}</td>
                        <td>{{ $usuario->fecha_registro }}</td>
                        <td>{{ $usuario->Direccion }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>


</html>
