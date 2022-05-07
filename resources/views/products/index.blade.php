@extends('layouts.app')

@section('css')
@endsection

@section('buttons')
   <!-- <a class="btn btn-primary mr-2" href="{/*{ /products/create }*/}">Crear Productos</a>--> 
   <a class="btn btn-primary mr-2" href="{{route('products.create')}}">Crear Productos</a>
@endsection

@section('content')
    <h2 class="text-center mb-5">Administración de productos</h2>
    <div class="col-md-10 mx-auto bg-white p-3">
    <table class="table">
        <thead class="bg-danger text-light">
            <tr>
                <th scole="col">Codigo</th>
                <th scole="col">Nombre</th>
                <th scole="col">Descripción</th>
                <th scole="col">Precio Unitario</th>
                <th scole="col">Existencias</th>
                <th scole="col">Garantía</th>
                <th scole="col">Vendedor</th>
                <th scole="col">Acciones</th>
            </tr>

        </thead>
        <tbody>
            {{$products}}
            @foreach ($products as $item)
                <tr>
                    <td>{{$item->product_id}}</td>
                    <td>{{$item->productName}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->stok}}</td>
                    <td>{{$item->garanty}}</td>
                    <td>{{$item->seller_id}}</td>
                    <td>
                        <a href="{{ route('products.destroy', ['product' => $item->product_id]) }}" class="btn btn-danger mr-1">Eliminar</a>
                        <a href="{{ route('products.edit', ['product' => $item->product_id]) }}" class="btn btn-warning mr-1">Editar</a>
                        <a href="{{url('/products/'.$item->product_id)}}" class="btn btn-success mr-1">Mostrar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('js')
@endsection