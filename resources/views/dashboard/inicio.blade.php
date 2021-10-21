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
          <h1 class="text-titles">System <small>Tiles</small></h1>
        </div>
    </div>
    <div class="full-box text-center" style="padding: 30px 10px;">
        <article class="full-box tile">
            <div class="full-box tile-title text-center text-titles text-uppercase">
                Admin
            </div>
            <div class="full-box tile-icon text-center">
                <i class="zmdi zmdi-account"></i>
            </div>
            <div class="full-box tile-number text-titles">
                <p class="full-box">7</p>
                <small>Register</small>
            </div>
        </article>
        <article class="full-box tile">
            <div class="full-box tile-title text-center text-titles text-uppercase">
                Teacher
            </div>
            <div class="full-box tile-icon text-center">
                <i class="zmdi zmdi-male-alt"></i>
            </div>
            <div class="full-box tile-number text-titles">
                <p class="full-box">10</p>
                <small>Register</small>
            </div>
        </article>
        <article class="full-box tile">
            <div class="full-box tile-title text-center text-titles text-uppercase">
                Student
            </div>
            <div class="full-box tile-icon text-center">
                <i class="zmdi zmdi-face"></i>
            </div>
            <div class="full-box tile-number text-titles">
                <p class="full-box">70</p>
                <small>Register</small>
            </div>
        </article>
        <article class="full-box tile">
            <div class="full-box tile-title text-center text-titles text-uppercase">
                Representative
            </div>
            <div class="full-box tile-icon text-center">
                <i class="zmdi zmdi-male-female"></i>
            </div>
            <div class="full-box tile-number text-titles">
                <p class="full-box">70</p>
                <small>Register</small>
            </div>
        </article>
    </div>
    <div class="container-fluid">
        <div class="page-header">
          <h1 class="text-titles">System <small>TimeLine</small></h1>
        </div>
        <section id="cd-timeline" class="cd-container">
            <div class="cd-timeline-block">
                <div class="cd-timeline-img">
                    <img src="./assets/img/avatar.jpg" alt="user-picture">
                </div>
                <div class="cd-timeline-content">
                    <h4 class="text-center text-titles">1 - Name (Admin)</h4>
                    <p class="text-center">
                        <i class="zmdi zmdi-timer zmdi-hc-fw"></i> Start: <em>7:00 AM</em> &nbsp;&nbsp;&nbsp; 
                        <i class="zmdi zmdi-time zmdi-hc-fw"></i> End: <em>7:17 AM</em>
                    </p>
                    <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> 07/07/2016</span>
                </div>
            </div>  
            <div class="cd-timeline-block">
                <div class="cd-timeline-img">
                    <img src="./assets/img/avatar.jpg" alt="user-picture">
                </div>
                <div class="cd-timeline-content">
                    <h4 class="text-center text-titles">2 - Name (Teacher)</h4>
                    <p class="text-center">
                        <i class="zmdi zmdi-timer zmdi-hc-fw"></i> Start: <em>7:00 AM</em> &nbsp;&nbsp;&nbsp; 
                        <i class="zmdi zmdi-time zmdi-hc-fw"></i> End: <em>7:17 AM</em>
                    </p>
                    <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> 07/07/2016</span>
                </div>
            </div>
            <div class="cd-timeline-block">
                <div class="cd-timeline-img">
                    <img src="./assets/img/avatar.jpg" alt="user-picture">
                </div>
                <div class="cd-timeline-content">
                    <h4 class="text-center text-titles">3 - Name (Student)</h4>
                    <p class="text-center">
                        <i class="zmdi zmdi-timer zmdi-hc-fw"></i> Start: <em>7:00 AM</em> &nbsp;&nbsp;&nbsp; 
                        <i class="zmdi zmdi-time zmdi-hc-fw"></i> End: <em>7:17 AM</em>
                    </p>
                    <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> 07/07/2016</span>
                </div>
            </div>
            <div class="cd-timeline-block">
                <div class="cd-timeline-img">
                    <img src="./assets/img/avatar.jpg" alt="user-picture">
                </div>
                <div class="cd-timeline-content">
                    <h4 class="text-center text-titles">4 - Name (Personal Ad.)</h4>
                    <p class="text-center">
                        <i class="zmdi zmdi-timer zmdi-hc-fw"></i> Start: <em>7:00 AM</em> &nbsp;&nbsp;&nbsp; 
                        <i class="zmdi zmdi-time zmdi-hc-fw"></i> End: <em>7:17 AM</em>
                    </p>
                    <span class="cd-date"><i class="zmdi zmdi-calendar-note zmdi-hc-fw"></i> 07/07/2016</span>
                </div>
            </div>   
        </section>


    </div>
</section>
@endsection