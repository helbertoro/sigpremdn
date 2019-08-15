@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    ¿Qué es SIGPREMDN?
                </div>
                <div class="card-body">
                    <p>Este aplicativo esta diseñado para la consulta predial al servicio del ministerio de defensa nacional, en donde ingenieros y topógrafos pueden visualizar y descargar la información correspondiente a los predios asignados a sus unidades.</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Videos
                </div>
                <div class="card-body">
                    <!-- Video 1 -->
                    <div class="embed-responsive embed-responsive-16by9 mb-3">
                        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/EtcxmAL5eYs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                    <!-- Video 2 -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/VNB6qktPuVg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
