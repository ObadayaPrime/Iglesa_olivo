
<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login con  PHP - Bootstrap 4</title>
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('estilos.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Medboard core JavaScript -->
 
             
        
        <link rel="stylesheet" type="text/css" href="fuentes/iconic/css/material-design-iconic-font.min.css">
        
    </head>
    
    <body>
      <div class="container-login">
        <div class="wrap-login">
            <form class="login-form validate-form" id="formLogin"  method="post" action="{{ route('login') }}">
            {{ csrf_field() }}
                <span class="login-form-title">Inicio de Secion</span>
                
                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <input class="input100" type="text" id="usuario" name="username" value="{{ old('username') }}" placeholder="Usuario">
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="wrap-input100" data-validate="Password incorrecto">
                    <input class="input100" type="password" id="password" name="password" placeholder="Password">
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="submit" class="login-form-btn">CONECTAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>     
    

    <script src="{{ asset('jquery/jquery-3.3.1.min.js') }}"></script>
           
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
               
    <script src="{{  asset('popper/popper.min.js') }}"></script>

    <script src="{{  asset('plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>

  
    <script>
        var base_url = "{{ url('/') }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
      <script src="{{  asset('codigo.js') }}"></script>
    </body>
</html>