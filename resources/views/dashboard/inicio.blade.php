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
          <h1 class="text-titles">Inicio</h1>
        </div>
    </div>
    <div class="full-box text-center" style="padding: 30px 10px;">
        <a href="{{ route('admin.show') }}"><article class="full-box tile">
            <div class="full-box tile-title text-center text-titles text-uppercase">
                Administrador
            </div>
            <div class="full-box tile-icon text-center">
                <i class="zmdi zmdi-account"></i>
            </div>
            <div class="full-box tile-number text-titles">
                <p class="full-box">7</p>
                <small>Registrar</small>
            </div></a>
        </article>
        <a href="{{ route('miembro.show') }}"><article class="full-box tile">
            <div class="full-box tile-title text-center text-titles text-uppercase">
                Miembros
            </div>
            <div class="full-box tile-icon text-center">
                <i class="zmdi zmdi-male-female"></i>
            </div>
            <div class="full-box tile-number text-titles">
                <p class="full-box">10</p>
                <small>Registrar</small>
            </div></a>
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
    <div class="container-fluid">
        <div class="page-header">
          <h1 class="text-titles">Grafico<small>Ingresos</small></h1>
        </div>
       
        <section class="container-fluid">
           <canvas id="estadisticas"></canvas>
        </section>


    </div>
</section>
@endsection
@push('javascript-form')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"></script>
<script>
   var ctx = $('#estadisticas');
    var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
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
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
           
        }
    }
});
        </script>
@endpush