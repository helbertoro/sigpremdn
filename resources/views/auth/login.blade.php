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
        <div class="d-flex flex-column justify-content-center align-items-center vh100">
            <img class="img-fluid mb-5" src="{!! asset('img/logo-home.png') !!}" alt="">
            
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <img class="img-fluid" src="{!! asset('img/SIGPREMDN.png') !!}" alt="">
                </div>
                <div class="col-md-4">
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
                            <button type="submit" class="btn btn-secondary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>

                    </form>
                </div>
            </div> <!-- row -->
            
        </div> <!-- d-flex -->
    </div>

<!-- Bootstrap JS -->
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>

</body>
</html>
