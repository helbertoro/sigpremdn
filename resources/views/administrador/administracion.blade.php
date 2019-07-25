@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            @include('includes.menu-admin')
        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-12">
                    <h1>Administración</h1>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a class="btn btn-secondary mb-3" href="{!! route('nuevoUsuario') !!}">Nuevo usuario</a>

                    <table class="table table-striped">
                        <tr>
                            <td>Usuario</td>
                            <td>Opciones</td>
                        </tr>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->email}}</td>
                            <td>
                                <a class="btn btn-danger btn-delete" href="{!! route('deleteUsuario', [$user->id]) !!}"><i class="fas fa-user-times"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection