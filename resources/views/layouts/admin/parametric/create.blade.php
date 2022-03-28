@extends('layouts.admin')
@section('content')
<h3>Creando nuevo parametro</h3>
<div class="container-fluid">
    <h4 class="mb-3">Datos del parametro nuevo</h4>
    {!! Form::open([ 'route' => 'parametric.store']) !!}
    @include('layouts.admin.parametric.form')
    <hr>
    <button type="submit" class="btn btn-success">Crear parametro</button>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::close()!!}
</div>
@endsection
