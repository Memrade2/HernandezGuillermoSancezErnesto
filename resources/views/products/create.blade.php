@extends('layouts.app')

@section('css')
@endsection

@section('buttons')
   <!-- <a class="btn btn-primary mr-2" href="{/*{ /products/create }*/}">Crear Productos</a>--> 
   <a class="btn btn-primary mr-2" href="{{route('products.index')}}">Regresar</a>
@endsection

@section('content')
    <h2 class="text-center mb-5">Crear nuevo productos</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="{{ route('products.store')}}" novalidate enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="productName">Titulo del producto</label>
                    <div class="col-md-6">
                        <input type="text" name="productName" id="productName" class="form-control @error('productName') is-invalid @enderror" placeholder="Nombre del producto"
                        value="{{old('productName')}}">
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
                        <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="Descripción"
                        value="{{old('description')}}">
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
                        <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Precio del producto"
                        value="{{old('price')}}">
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
                        <input type="text" name="stok" id="stok" class="form-control @error('stok') is-invalid @enderror" placeholder="Existencias"
                        value="{{old('stok')}}">
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
                        <input type="text" name="garanty" id="garanty" class="form-control @error('garanty') is-invalid @enderror" placeholder="Garantías"
                        value="{{old('garanty')}}">
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
                       <select name="seller_id" class="form-control  @error('seller_id') is-invalid @enderror" id="seller_id">
                            <option >--- Seleccione una opción ---</option>
                          @foreach ($sellers as $id => $seller_id)
                              <option value="{{ $id }}"{{old('seller_id')==$id ? 'selected' :''}}>{{$seller_id}}</option>
                          @endforeach
                       </select>
                       @error('seller_id')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row-mb-0"></div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Agregar producto">
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
@endsection