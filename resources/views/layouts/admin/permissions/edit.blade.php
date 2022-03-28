@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <br>
    <div class="row justify-content-md-center">
        <div class="col col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Crear Usuario</h3>
                </div>
                <div class="card-body">
                    {!! Form::model($permiso,['route' => ['permission.update', encode($permiso->id)],'method'=>'put']) !!}
                    @include('layouts.admin.permissions.form')
                    <hr>
                    <button class="btn btn-primary" type="submit">Editar</button>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
