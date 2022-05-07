@extends('layouts.app')

@section('css')
@endsection

@section('buttons')
   <!-- <a class="btn btn-primary mr-2" href="{/*{ /products/create }*/}">Crear Productos</a>--> 
   <a class="btn btn-primary mr-2" >Crear Productos</a>
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
        
    </table>
</div>
@endsection

@section('js')
@endsection