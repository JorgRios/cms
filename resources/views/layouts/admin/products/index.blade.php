@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <h1>Productos</h1>
    <div class="row">
        <div class="col">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{route('products.create')}}" class="btn btn-success"> <i class="fa fa-plus"></i> Agregar Productos</a>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Descripcion</th>
                        <th>Foto</th>
                        <th>Brand category</th>
                        <th>Factures</th>
                        <th>Price</th>
                        <th>Code</th>
                        <th>Ver</th>
                        <th>Editar</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $producto)
                    <tr>
                        <td>{{$producto->name}}</td>
                        <td>{{$producto->description}}</td>
                        <td>{{$producto->photo}}</td>
                        <td>{{$producto->brand_category_id}}</td>
                        <td>{{$producto->features}}</td>
                        <td>{{$producto->price}}</td>
                        <td>{{$producto->code}}</td>
                        <td><a href="#" class="btn btn-info">Sh</a></td>
                        <td><a href="#" class="btn btn-warning">Ed</a></td>
                        <td><a href="#" class="btn btn-danger">Dl</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
