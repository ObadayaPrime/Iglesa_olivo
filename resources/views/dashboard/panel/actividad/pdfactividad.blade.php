<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actividades</title>
    <style>
        h1 {
            text-align: center;
            text-transform: uppercase;
        }

        .contenido {
            font-size: 20px;
            text-align: center;
        }

        table {
            text-align: center;
            text-transform: uppercase;
        }

    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="page-header">
            <h1 class="text-titles"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Lista de Actividades </h1>
        </div>
    </div>

    <div class="container-fluid">
        <div class="table-responsive">

            <table id="miembro" class="table table-striped table-bordered centered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Cod</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Fecha de Inicio</th>
                        <th class="text-center">Fecha de Final</th>
                        <th class="text-center">Lugar</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($Actividad as $actividad)
                        <tr>
                            <td>{{ $actividad->IDac }}</td>
                            <td>{{ $actividad->NombreActi }}</td>
                            <td>{{ $actividad->FechaInicio }}</td>
                            <td>{{ $actividad->FechaFinal }}</td>
                            <td>{{ $actividad->Lugar }}</td>


                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>


</html>
