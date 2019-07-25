@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- left -->
        <div class="col-3">
            <div class="card">
                <div class="card-header">Búsqueda</div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="division">División</label>
                            <input type="text" class="form-control" id="division">
                        </div>

                        <div class="form-group">
                            <label for="brigada">Brigada</label>
                            <input type="text" class="form-control" id="brigada">
                        </div>

                        <div class="form-group">
                            <label for="unidad">Unidad</label>
                            <input type="text" class="form-control" id="unidad">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- center -->
        <div class="col-6">
            <div class="card">
                <div class="card-header">Información geográfica</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="embed-responsive embed-responsive-4by3">
                      <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.8794295899456!2d-74.09635264911238!3d4.6155879436571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f996f336f8a7b%3A0x183024e16c3df506!2sSecretar%C3%ADa+Distrital+de+Salud!5e0!3m2!1ses!2sco!4v1562790167662!5m2!1ses!2sco" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- right -->
        <div class="col-3">
            <div class="card">
                <div class="card-header">Opciones</div>

                <div class="card-body">
                    <ul class="lista-opciones">
                        <li>
                            <img class="img-fluid" src="{!! asset('img/PDF.jpg') !!}" alt="">
                        </li>
                        <li>
                            <img class="img-fluid" src="{!! asset('img/KMZ.jpg') !!}" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
