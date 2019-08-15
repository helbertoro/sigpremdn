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
<body id="login">
    <div class="container">
        <div class="d-flex flex-column bd-highlight justify-content-between vh100">

            <div class="row bd-highlight align-self-center">
                <div class="col">
                    <img class="img-fluid mt-5" src="{!! asset('img/logo-home.png') !!}" alt="">
                </div>
            </div>
            
            <div class="row bd-highlight justify-content-center align-items-center">
                <div class=" col-8 col-md-5 col-lg-4">
                    <img class="img-fluid" src="{!! asset('img/SIGPREMDN.png') !!}" alt="">
                </div>
                <div class="col-10 col-md-7 col-lg-5">
                    <div id="mapa-colombia">
                        <form method="POST" action="{{ route('login') }}">
                            
                            @csrf
                            
                            <div class="form-group row">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="form-group row">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="form-group row mb-0">
                                <button type="submit" class="btn btn-sigpre">
                                    {{ __('Login') }}
                                </button>
                                {{--
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                                --}}
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>

            <div class="row bd-highlight">
                <div class="col">
                    <img class="img-fluid mb-3" src="{!! asset('img/logo-bicentenario.png') !!}" alt="">
                </div>
            </div>
            
        </div> <!-- d-flex -->
    </div>
    
    <!-- Bootstrap JS -->
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
    
</body>
</html>
