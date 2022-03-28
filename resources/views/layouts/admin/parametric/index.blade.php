@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <h1>Parametros del sistema</h1>
    <div class="row">
        <div class="col">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                @can('parametrics.create', Model::class)
                <a href="{{route('parametric.create')}}" class="btn btn-success"> <i class="fa fa-plus"></i> Nuevo parametro </a>
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
                        <th>Valor</th>
                        <th>Descripcion</th>
                        <th>Grupo</th>
                        <th>Conector</th>
                        <th>slug</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($parametros as $parametro)
                        <tr>
                            <td>{{$parametro->value}}</td>
                            <td>{{Str::substr($parametro->description, 0, 100) }}</td>
                            <td>{{$parametro->group}}</td>
                            <td>{{$parametro->conector}}</td>
                            <td>{{$parametro->slug}}</td>
                            <td>
                                @can('parametrics.edit')
                                <a href="{{route('parametric.edit',[encode($parametro->id)])}}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                @endcan
                            </td>
                            <td>
                                @can('parametrics.destroy')
                                {!!Form::open(['route' => ['parametric.destroy',encode($parametro->id)],'method'=>'delete', 'onsubmit'=>"return confirm('¿Continuar con el borrado del parametro del sistema?')"])!!}
                                <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i></button>
                                {!!Form::close()!!}
                                @endcan
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td scope="row" colspan="5" class="text-center">Sin regritros</td>
                        </tr>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="col">Valor</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Grupo</th>
                        <th scope="col">Conector</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
