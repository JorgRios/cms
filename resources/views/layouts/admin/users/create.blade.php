@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <h1>Usuarios</h1>
    <div class="row justify-content-md-center">
        <div class="col col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Crear Usuario</h3>
                </div>
                <div class="card-body">
                    {!! Form::open([ 'route' => 'user.store']) !!}
                    @include('layouts.admin.users.form')
                    <hr>
                    <button class="btn btn-primary" type="submit">Crear</button>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
