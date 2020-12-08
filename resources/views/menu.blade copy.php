@extends('layouts.app')

@section('content')

<!----------------------------------------HEADER----------------------------------------------->     



<body>
    <main class="main">
        <section class="group group--color mb-2">
            <div class="contra">
              <h2 class="main__title">Bebidas</h2> <!--Primer titulo -->
            </div>
        </section>
        
    
<!----------IMAGENES DE LOS PLATILLOS DESTACADOS------------->     
        <div class="contra"> 
            <div class="item" id="item1">
                <img src="{{asset('img/chilaquiles.jpg')}} " alt="" class="destacados__img">
            </div>
            <div class="item" id="item2">
                <img src="{{asset('img/chilaquiles.jpg')}} " alt="" class="destacados__img">
            </div> 
        </div>           
        <h2 class="group__title">Platillos de hoy</h2> <!--Segundo titulo -->
        <span class="linea"></span> <!--línea de divición -->

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
            <a href=" {{route('comprar')}} " class="btn btn-block btn-secondary">Comprar</a>
        </div>
        @endforeach
        
    </section>    
    </main>
</body>
</html>

@endsection