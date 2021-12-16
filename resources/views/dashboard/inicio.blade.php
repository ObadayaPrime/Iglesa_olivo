@extends('dashboard.layout.layout')
@push('css-header')

@endpush
@section('content')

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

        @if (Auth::user()->isAdmin())
            <div class="container-fluid">
                <div class="page-header">
                    <h1 class="text-titles">Ministerio Pastoral</h1>
                </div>
            </div>
        @endif

        @if (Auth::user()->isEvangelista())
            <div class="container-fluid">
                <div class="page-header">
                    <h1 class="text-titles">Ministerio Evangelista</h1>
                </div>
            </div>
        @endif

        @if (Auth::user()->isAlabanza())
            <div class="container-fluid">
                <div class="page-header">
                    <h1 class="text-titles">Ministerio de Alabanza</h1>
                </div>
            </div>
        @endif

        @if (Auth::user()->isAdmin())
            <div class="full-box text-center" style="padding: 30px 10px;">
                <a href="{{ route('admin.show') }}">
                    <article class="full-box tile">
                        <div class="full-box tile-title text-center text-titles text-uppercase">
                            Administrador
                        </div>
                        <div class="full-box tile-icon text-center">
                            <i class="zmdi zmdi-account"></i>
                        </div>
                        <div class="full-box tile-number text-titles">
                            <p class="full-box">7</p>
                            <small>Registrar</small>
                        </div>
                </a>
                </article>
                <a href="{{ route('miembro.show') }}">
                    <article class="full-box tile">
                        <div class="full-box tile-title text-center text-titles text-uppercase">
                            Miembros
                        </div>
                        <div class="full-box tile-icon text-center">
                            <i class="zmdi zmdi-male-female"></i>
                        </div>
                        <div class="full-box tile-number text-titles">
                            <p class="full-box">10</p>
                            <small>Registrar</small>
                        </div>
                </a>
                </article>
                <article class="full-box tile">
                    <div class="full-box tile-title text-center text-titles text-uppercase">
                        Ministerios
                    </div>
                    <div class="full-box tile-icon text-center">
                        <i class="zmdi zmdi-tab"></i>
                    </div>
                    <div class="full-box tile-number text-titles">
                        <p class="full-box">70</p>
                        <small>Registrar</small>
                    </div>
                </article>
                <article class="full-box tile">
                    <div class="full-box tile-title text-center text-titles text-uppercase">
                        Diezmos
                    </div>
                    <div class="full-box tile-icon text-center">
                        <i class="zmdi zmdi-money"></i>
                    </div>
                    <div class="full-box tile-number text-titles">
                        <p class="full-box">70</p>
                        <small>Registrar</small>
                    </div>
                </article>

            </div>
        @endif

        @if (Auth::user()->isEvangelista())
            <div class="full-box text-center" style="padding: 30px 10px;">
                <a href="{{ route('admin.show') }}">
                    <article class="full-box tile">
                        <div class="full-box tile-title text-center text-titles text-uppercase">
                            Actividad
                        </div>
                        <div class="full-box tile-icon text-center">
                            <i class="zmdi zmdi-account"></i>
                        </div>
                        <div class="full-box tile-number text-titles">
                            <p class="full-box">7</p>
                            <small>Registrar</small>
                        </div>
                </a>
                </article>
                <a href="{{ route('miembro.show') }}">
                    <article class="full-box tile">
                        <div class="full-box tile-title text-center text-titles text-uppercase">
                            Personas Nuevas
                        </div>
                        <div class="full-box tile-icon text-center">
                            <i class="zmdi zmdi-male-female"></i>
                        </div>
                        <div class="full-box tile-number text-titles">
                            <p class="full-box">10</p>
                            <small>Registrar</small>
                        </div>
                </a>
                </article>
                <article class="full-box tile">
                    <div class="full-box tile-title text-center text-titles text-uppercase">
                        Lista de Personas
                    </div>
                    <div class="full-box tile-icon text-center">
                        <i class="zmdi zmdi-tab"></i>
                    </div>
                    <div class="full-box tile-number text-titles">
                        <p class="full-box">70</p>
                        <small>Ver...</small>
                    </div>
                </article>
                <article class="full-box tile">
                    <div class="full-box tile-title text-center text-titles text-uppercase">
                        Repoertes
                    </div>
                    <div class="full-box tile-icon text-center">
                        <i class="zmdi zmdi-money"></i>
                    </div>
                    <div class="full-box tile-number text-titles">
                        <p class="full-box">70</p>
                        <small>Ver...</small>
                    </div>
                </article>

            </div>
        @endif

        @if (Auth::user()->isAlabanza())
            <div class="full-box text-center" style="padding: 30px 10px;">
                <a href="{{ route('admin.show') }}">
                    <article class="full-box tile">
                        <div class="full-box tile-title text-center text-titles text-uppercase">
                            Canciones o Alabanzas
                        </div>
                        <div class="full-box tile-icon text-center">
                            <i class="zmdi zmdi-account"></i>
                        </div>
                        <div class="full-box tile-number text-titles">
                            <p class="full-box">7</p>
                            <small>Registrar</small>
                        </div>
                </a>
                </article>
                <a href="{{ route('miembro.show') }}">
                    <article class="full-box tile">
                        <div class="full-box tile-title text-center text-titles text-uppercase">
                            Lista de Alabanzas
                        </div>
                        <div class="full-box tile-icon text-center">
                            <i class="zmdi zmdi-male-female"></i>
                        </div>
                        <div class="full-box tile-number text-titles">
                            <p class="full-box">10</p>
                            <small>Ver...</small>
                        </div>
                </a>
                </article>
                <article class="full-box tile">
                    <div class="full-box tile-title text-center text-titles text-uppercase">
                        Reportes
                    </div>
                    <div class="full-box tile-icon text-center">
                        <i class="zmdi zmdi-money"></i>
                    </div>
                    <div class="full-box tile-number text-titles">
                        <p class="full-box">70</p>
                        <small>Ver...</small>
                    </div>
                </article>
            </div>
        @endif
        @if (Auth::user()->isAdmin())
        <div class="container-fluid">
            <div class="page-header">
                <h1 class="text-titles">Grafica</h1>
            </div>
            <div class="col-md-12">
                <select name="" id="" class="años">

                    <option value="">2020</option>
                    <option value="">2021</option>
                </select>
            </div>
        </div>
        <div class="container-fluid">
            <div class="col-xs-12 col-md-6 ">
                <h1 class="text-titles">Diezmos</h1>
                <canvas id="estadisticas"></canvas>
            </div>
            <div class="col-xs-12 col-md-6 ">
                <h1 class="text-titles">Ofrenda</h1>
                <canvas id="ofrenda"></canvas>
            </div>
        </div>
        <br><br>
    </section>
    @endif
@endsection

@if (Auth::user()->isAdmin())
@push('javascript-form')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js"
        integrity="sha512-SuxO9djzjML6b9w9/I07IWnLnQhgyYVSpHZx0JV97kGBfTIsUYlWflyuW4ypnvhBrslz1yJ3R+S14fdCWmSmSA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        /*funcion*/
        function char_cambios(valores) {
            return char = {
                type: 'bar',
                data: {
                    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
                        'Octubre', 'Noviembre', 'Diciembre'
                    ],
                    datasets: [{
                        data: valores,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'

                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {

                    }
                }
            }
        }
        /*end funcion*/
        var ctx_estadisticas = $('#estadisticas');
        var data_inicio = [1, 19, 3, 5, 2, 45, 19, 3, 75, 12, 3, 19];
        var myBarChart_estadisticas = new Chart(ctx_estadisticas, char_cambios(data_inicio));
    </script>

    <script>
        var ctx_ofrenda = $('#ofrenda');
        var myBarChart_ofrenda = new Chart(ctx_ofrenda, char_cambios(data_inicio));
    </script>
    <script>
        $(".años").change(function() {
            myBarChart_estadisticas.destroy();
            myBarChart_ofrenda.destroy();
            var data_2021_diezmo = [{{ $enero->total }}, {{ $febrero->total }},{{ $marzo->total }}, {{ $abril->total }},{{ $mayo->total }}, {{ $junio->total }},{{ $julio->total }}, {{ $agosto->total }},{{ $septiembre->total }}, {{ $octubre->total }},{{ $noviembre->total }}, {{ $diciembre->total }}
            ];
            var data_2021_ofrenda =  [{{ $enero1->total }}, {{ $febrero1->total }},{{ $marzo1->total }}, {{ $abril1->total }},{{ $mayo1->total }}, {{ $junio1->total }},{{ $julio1->total }}, {{ $agosto1->total }},{{ $septiembre1->total }}, {{ $octubre1->total }},{{ $noviembre1->total }}, {{ $diciembre1->total }}
            ];
            myBarChart_estadisticas = new Chart(ctx_estadisticas, char_cambios(data_2021_diezmo));
            myBarChart_ofrenda = new Chart(ctx_ofrenda, char_cambios(data_2021_ofrenda));
        });
    </script>
@endpush
@endif