@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-md-center">
        <div class="col col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Editar Usuario</h3>
                </div>
                <div class="card-body">
                    {!! Form::model($usuario,['route' => ['user.update', encode($usuario->id)],'method'=>'put']) !!}
                    @include('layouts.admin.users.form')
                    <hr>
                    <button class="btn btn-primary" type="submit">Editar</button>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
