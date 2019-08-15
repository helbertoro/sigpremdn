@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    Menú
                </div>
                <div class="card-body">
                    @include('includes.menu-admin')
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Nuevo Usuario
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('postNuevoUsuario') }}">
                                @csrf
                                
                                <div class="form-group row">
                                    <label for="name" class="col-md-3 col-form-label">{{ __('Name') }}</label>
                                    
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="email" class="col-md-3 col-form-label">{{ __('E-Mail Address') }}</label>
                                    
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="password" class="col-md-3 col-form-label">{{ __('Password') }}</label>
                                    
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-3 col-form-label">{{ __('Confirm Password') }}</label>
                                    
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-3">
                                        <button type="submit" class="btn btn-sigpre">
                                            Registrar
                                        </button>
                                    </div>
                                </div>
                            </form>          
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
