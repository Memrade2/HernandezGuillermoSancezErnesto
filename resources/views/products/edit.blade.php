@extends('layouts.app')



@section('css')



@endsection

@section('buttons')

<a class="btn btn-primary mr-2" href="{{route('products.index')}}">Regresar</a>

@endsection

@section('content')

<h2 class="text-center mb-5">Editar producto</h2>

<div class="row justify-content-center">

<div class="col-md-8">

<form method="POST" action="{{ route('products.update', ['product' => $product->product_id]) }}"  enctype="multipart/form-data" novalidate>
                @csrf
@method('PUT')

<div class="row mb-3">

<label for="productName">Titulo Producto</label>

<div class="col-md-6">

<input type="text" name="productName" class="form-control @error('productName') is-invalid @enderror" id="productName" placeholder="Nombre del Producto" value="{{ $product->productName }}" />
@error('productName')
<span class="invalid-feedback d-block" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
<div class="row mb-3">
    <label for="description">Descripción</label>
    <div class="col-md-6">
        <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="Descripción"  value="{{ $product->description }}">
        @error('description')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="row mb-3">
    <label for="price">Precio</label>
    <div class="col-md-6">
        <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Precio del producto"  value="{{ $product->price }}">
        @error('price')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="row mb-3">
    <label for="stok">Existencias</label>
    <div class="col-md-6">
        <input type="text" name="stok" id="stok" class="form-control @error('stok') is-invalid @enderror" placeholder="Existencias"  value="{{ $product->stok }}">
        @error('stok')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="row mb-3">
    <label for="garanty">Garantías</label>
    <div class="col-md-6">
        <input type="text" name="garanty" id="garanty" class="form-control @error('garanty') is-invalid @enderror" placeholder="Garantías"  value="{{ $product->garanty }}">
        @error('garanty')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="row mb-3">
    <label for="seller_id">Vendedores</label>
    <div class="col-md-6">
       

       <select name="seller_id" class="form-control  
            @error('seller_id') is-invalid @enderror" id="seller_id">
            <option>Seleccione---</option>
            @foreach ($sellers as $supplier)
            <option value="{{ $supplier->seller_id }}"
                {{$product->seller_id==$supplier->seller_id ? 'selected' : '' }}> {{ $supplier->dui }}</option>
            @endforeach

        </select>
       
        @error('seller_id')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="row mb-0"> 
</div>
<div class="form-group">
    <button class="btn btn-warning"> Agregar Producto</button>
    
</div>
</form>

</div>
</div>
@endsection
@section('js')
<script type="text/javascript">
    function clickBtn(){
        Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
        
    }
@endsection