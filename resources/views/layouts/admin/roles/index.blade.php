@extends('layouts.admin')
@section('content')
<div class="container-fluid ">
    <h1>Roles</h1>
<div class="row">
    <div class="col">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            @can('role.create')
                <a href="{{route('role.create')}}" class="btn btn-success"> <i class="fa fa-plus"></i> Agregar Rol</a>
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
                    <th>Nombre</th>
                    <th>Permisos</th>
                    @can('role.edit')
                        <th width="5px">Editar</th>
                    @endcan
                    @can('role.destroy')
                        <th width="5px">Eliminar</th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @forelse ($roles as $rol)
                    <tr>
                        <td>{{$rol->name}}</td>
                        <td>{!!implode("<br>", $rol->permissions->pluck('description')->toarray())!!} </td>
                        @can('role.edit')
                            <td><a href="{{route('role.edit',[encode($rol->id)])}}" class="btn btn-warning"> <i class="fa fa-pencil"></i></a></td>
                        @endcan
                        @can('role.destroy')
                            <td>
                                {!!Form::open(['route' => ['role.destroy',encode($rol->id)],'method'=>'delete', 'onsubmit'=>"return confirm('¿continuar?')"])!!}
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
