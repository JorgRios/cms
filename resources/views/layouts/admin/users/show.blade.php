@extends('layouts.master2')
@section('content')
<br>
<hr>
<h3>Usuario {{$usuario->name}}</h3>
<div class="row">
    <div class=" table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th>Nombre de usuario</th>
                <th>Empresa</th>
                <th>Correo electrónico</th>
                <th>Celular</th>
                <th>Roles</th>
                <th>Fecha de registro</th>
            </tr>
            <tr>
                <td>
                    <img src="{{($usuario->avatar)? $usuario->avatar : asset('imagenes/avatar.jpg')}}" alt="avatar de {{$usuario->name}}" width="35px" height="35px" style="border-radius: 50%;">
                    {{$usuario->name}}
                </td>
                <td>{{$usuario->company->business_name}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->cellular}}</td>
                <td>{!!implode("<br>", $usuario->roles->pluck('name')->toarray())!!} </td>
                <td>{{getTextDateCarbon($usuario->created_at)}}</td>
            </tr>
        </table>
    </div>
</div>
@endsection
