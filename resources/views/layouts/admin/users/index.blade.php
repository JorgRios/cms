@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <h1>Usuarios</h1>
<div class="row">
    <div class="col">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            @can('user.create')
            <a href="{{route('user.create')}}" class="btn btn-success"> <i class="fa fa-plus"></i> Agregar Usuario</a>
            @endcan
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Correo electronico</th>
                    <th>Telefono</th>
                    <th>Roles</th>
                    @can('user.show')
                        <th width="5px">Ver</th>
                    @endcan
                    @can('user.edit')
                        <th width="5px">Editar</th>
                    @endcan
                    @can('user.destroy')
                        <th width="5px">Eliminar</th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @forelse ($usuarios as $usuario)
                    <tr>
                        <td>{{$usuario->username}}</td>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->email}}</td>
                        <td>{{$usuario->phone}}</td>
                        <td>{!!implode("<br>", $usuario->roles->pluck('name')->toarray())!!} </td>
                        @can('user.show')
                            <td><a href="{{route('user.show',[encode($usuario->id)])}}" class="btn btn-info"> <i class="fa fa-eye"></i></a></td>
                        @endcan
                        @can('user.edit')
                            <td><a href="{{route('user.edit',[encode($usuario->id)])}}" class="btn btn-warning"> <i class="fa fa-pencil"></i></a></td>
                        @endcan
                        @can('user.destroy')
                            <td>
                                {!!Form::open(['route' => ['user.destroy',encode($usuario->id)],'method'=>'delete', 'onsubmit'=>"return confirm('¿continuar?')"])!!}
                                <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i></button>
                                {!!Form::close()!!}
                            </td>
                        @endcan
                    </tr>
                @empty
                    <tr>
                        <td colspan="12">No se encotraron registros</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection
