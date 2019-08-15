<!doctype html>
<html lang="es">
<head>
    <!-- Tags requeridos -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/styles.css') !!}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <title>SIGPREMDN</title>
</head>
<body id="back-internas">
    <!-- Top -->
    <div class="container-fluid" id="top">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="row pt-5 pb-2">
                        <div class="col-6 text-center">
                            <img class="img-fluid logo" src="{!! asset('img/logo-home.png') !!}" alt="">
                        </div>
                        <div class="col-6 text-center">
                            <img class="img-fluid logo" src="{!! asset('img/logo-bicentenario.png') !!}" alt="">
                            <img class="img-fluid logo" src="{!! asset('img/escudo-colombia.png') !!}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menú -->
    <div class="container-fluid" id="menu">
        <div class="row">
            <div class="col-12">
                
                <div class="container">
                    <nav class="navbar navbar-expand-md">
                    
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link btn btn-outline-white" href="{!! route('home') !!}">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-outline-white" href="{!! route('queEs') !!}">¿Qué es SIGPREMDN?</a>
                                </li>
                                @if(Auth::user()->admin == 1)
                                <li class="nav-item">
                                    <a class="nav-link btn btn-outline-white" href="{!! route('administracion') !!}">Administración</a>
                                </li>
                                @endif
                            </ul>
                        </div>

                        <span class="navbar-text">
                            {{ Auth::user()->name }}
                            <a class="btn btn-sm btn-outline-secondary" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Salir
                            </a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </span>
                        
                    </nav>
                </div>
                        
                        
                    
            </div>
        </div>
    </div>
    <!-- Content -->    
    <main class="py-4 d-flex align-self-stretch">
        @yield('content')
    </main>


<!-- Optional -->
<!-- jQuery -->
<script src="{!! asset('js/jquery-3.4.1.slim.min.js') !!}"></script>
<!-- Bootstrap JS -->
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
@yield('script')

</body>
</html>