@extends('layouts.app')

@section('css')

@endsection
@section('buttons')
<a class="btn btn-primary mr-2" href="{{route('products.index')}}">Regresar</a>
@endsection
@section('content')

<article class="contenido-producto">
    <h1 class="text-center mb-4">{{$product->productName}}</h1>
    <div class="product-meta">
        <p>
            <span class="font-weight-bold text-primary">Descripcion</span>
            {{$product->description}}
        </p>
        <p>
            <span class="font-weight-bold text-primary">DUI Vendedor</span>
            {{$product->seller->dui}}
        </p>
        
        <p>
            <span class="font-weight-bold text-primary">Precio</span>
            {{$product->price}}
        </p>
        <p>
            <span class="font-weight-bold text-primary">Existencias</span>
            {{$product->stok}}
        </p>
        <p>
            <span class="font-weight-bold text-primary">Garantia</span>
            {{$product->garanty}}
        </p>
    </div>

</article>

@endsection

@section('js')
<script type="text/javascript">
 function clickBtn(){
     Swal.fire(
  'The Internet?',
  'That thing is still around?',
  'question'
)
 }
</script>
@endsection 