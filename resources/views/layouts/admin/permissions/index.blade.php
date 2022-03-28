@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <h1>Permisos</h1>
    <div class="row">
        <div class="col">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{route('permission.create')}}" class="btn btn-success"> <i class="fa fa-plus"></i> Agregar Permiso</a>
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
                        <th>Descripción</th>
                        @can('permission.edit')
                            <th width="5px">Editar</th>
                        @endcan
                        @can('permission.destroy')
                            <th width="5px">Eliminar</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                    @forelse ($permisos as $permiso)
                        <tr>
                            <td>{{$permiso->name}}</td>
                            <td>{{$permiso->description}}</td>
                            @can('permission.edit')
                                <td><a href="{{route('permission.edit',[encode($permiso->id)])}}" class="btn btn-warning"> <i class="fa fa-pencil"></i></a></td>
                            @endcan
                            @can('permission.destroy')
                                <td>
                                    {!!Form::open(['route' => ['permission.destroy',encode($permiso->id)],'method'=>'delete', 'onsubmit'=>"return confirm('¿continuar?')"])!!}
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
