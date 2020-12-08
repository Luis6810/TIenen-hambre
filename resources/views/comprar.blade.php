@extends('layouts.app')

@section('content')
<div class="container">
    <section class="group group--color mb-2">
        <div class="contra">
          <h2 class="main__title">Confirmar compra</h2> <!--Primer titulo -->
        </div>
        <div class="conte">
        <h2>Información de la orden</h2>
            <h4>Platillo:</h4>
            <h5>{{$product->name}}</h5> 
            <h4>Precio Unidario:</h4>
            <h5>{{$product->price}}</h5>
            <h4>Precio Total:</h4>
            <h5>{{$product->price}}</h5>
        </div>  
         
            <form action="">
        <div class="content">
            <h2 class="main__title">Información del usuario:</h2>
            <input type="text" name="nombre" placeholder="Nombre del titular" class="input-48">
            <input type="text" name="tarjeta" placeholder="No. Tarjeta" class="input-48">
            <input type="text" name="cvv" placeholder="CVV" class="input-48">
                
            <input type="text" name="municipio" placeholder="Municipio" class="input-48">
            <input type="text" name="Colonia" placeholder="Colonia" class="input-48">
            <input type="text" name="Calle" placeholder="Calle" class="input-48">
            <input type="text" name="No" placeholder="No" class="input-48">
            <input type="text" name="Entre calles" placeholder="Entre calles" class="input-48">
            <input type="text" name="Código postal" placeholder="Código postal" class="input-48">
            <input type="text" name="Teléfonoo" placeholder="Teléfono" class="input-48">
            <input type="text" name="Recibe" placeholder="Recibe" class="input-48">
            <input type="text" name="Referencias" placeholder="Referencias">
            <a class="nav-link button" href="">Enviar</a>
        </div>
            </form>


    </section>
</div>


@endsection