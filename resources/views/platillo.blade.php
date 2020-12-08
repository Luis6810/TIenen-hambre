@extends('layouts.app')

@section('content')
<!----------------------------------------HEADER----------------------------------------------->     
      <!----------------------------------------DESCRIPCIÓN DEL PLATILLO-----------------------------------------------> 
      <div class="container">
        <div class="container_h"> 
            <h2><a href=" {{route('menu')}} ">>>Volver al Menú</a></h2> 
        </div>
        <div class="card mb-3" style="">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="{{$product->image}}" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$product->name}}</h5>
                  <p class="card-text">{{$product->description}}</p>
                  <p class="main__txt">Disponible: {{$product->stock}}</p>
                    <h4 class="main_price">Precio:${{$product->price}}</h4>
                        <a href="" class="btn btn-primary">Añadir al carrito</a>
                        <a href="{{route('comprar',$product->id)}} " class="btn btn-success">Comprar</a>
                </div>
              </div>
            </div>
          </div>
    </div> 
      
@endsection