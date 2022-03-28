@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <br>
    <div class="row justify-content-md-center">
        <div class="col col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Crear Rol</h3>
                </div>
                <div class="card-body">
                    {!! Form::open([ 'route' => 'role.store']) !!}
                    @include('layouts.admin.roles.form')
                    <hr>
                    <button class="btn btn-primary" type="submit">Crear</button>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
