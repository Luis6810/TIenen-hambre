@extends('layouts.app')

@section('content')
<!----------------------------------------HEADER----------------------------------------------->     
<main class="main">
  <section class="group group--color mb-2">
      <div class="contra">
        <h2 class="main__title">Especiales</h2> <!--Primer titulo -->
      </div>
  </section>
<!----------IMAGENES DE LOS PLATILLOS DE HOY-------------> 
<section class="galeria">
  @foreach ($products as $product)
  <div class="conteiner_platillos">
      <a href="{{route('platillo',$product->id)}}">
        <img src="{{$product->image}} " alt="" class="today-special__img">
      </a>    
      <div class="today-special__title">{{$product->name}}</div>
      <div class="today-special__title">Disponibles:{{$product->stock}}</div>
      <div class="today-special__price">Precio: ${{$product->price}}</div>
      <a href="{{route('platillo',$product->id)}}" class="btn btn-block btn-primary">Detalles</a>
              <a href=" {{route('comprar',$product->id)}} " class="btn btn-block btn-secondary">Comprar</a>
  </div>
  @endforeach
  
</section>    
</main>
            
            
        </div>
    </div>

@endsection