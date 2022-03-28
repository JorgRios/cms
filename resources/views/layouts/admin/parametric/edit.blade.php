@extends('layouts.admin')
@section('content')
<h3>Editando parametro</h3>
<div class="container-fluid">
    <h4 class="mb-3">Datos del parametro nuevo</h4>
    {!! Form::model($parametro,['route' => ['parametric.update', encode($parametro->id)],'method'=>'put']) !!}
    @include('layouts.admin.parametric.form')
    <hr>
    <button type="submit" class="btn btn-success">Actualizar parametro</button>
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
