@extends('padreNF')
@section('contenidoPrincipal')
<section class="row col-lg-12 col-md-12 col-sm-12 col-12 m-lg-0 m-md-0 m-sm-0 m-0 mt-lg-4 pb-lg-5 pb-md-5 pb-sm-5 pb-5 pt-lg-4 pt-md-4 pt-sm-4 pt-4">
    <div id="titulo" class="row col-lg-12 col-md-12 col-sm-12 col-12 m-lg-0 m-md-0 m-sm-0 m-0">
        <div id="aux" class="col-lg-4 col-md-4 m-lg-0 m-md-0 m-sm-0 m-0 d-none d-sm-block"></div>
            <h1 class="text-center col-lg-4 col-md-4 col-sm-6 col-5 m-lg-0 m-md-0 m-sm-0 m-0">Ojos</h1>
            <div id="desplegable" class="text-center col-lg-4 col-md-4 col-sm-6 col-7 m-lg-0 m-md-0 m-sm-0 m-0 row p-lg-2 p-md-2 p-sm-2 p-2">
                <h5 class="col-lg-6 col-md-3 col-sm-4 col-3 text-end p-lg-2 pt-md-2 pb-md-2 pt-sm-2 pb-sm-2 pt-2 pb-2 pe-0">Filtro</h5>
                <div class="dropdown col-lg-6 col-md-9 col-sm-8 col-9">
                    <button type="button" class="btn dropdown-toggle text-start" data-bs-toggle="dropdown" style="width: 85%;">
                        Menor precio  
                    </button>
                    <ul class="dropdown-menu text-start">
                        <li><a class="dropdown-item" href="#">Todos</a></li>
                        <li><a class="dropdown-item" href="#">Tendencia</a></li>
                        <li><a class="dropdown-item" href="#">Menor precio</a></li>
                        <li><a class="dropdown-item" href="#">Mayor precio</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="productos" class="row col-lg-12 col-md-12 col-sm-12 col-12 m-lg-0 m-md-0 m-sm-0 m-0 mt-lg-4 pb-lg-5 ps-lg-5 ps-md-5 ps-sm-4 ps-4 pb-md-5 pb-sm-5 pb-5 pt-lg-4 pt-md-4 pt-sm-4 pt-4">

        @foreach($productos as $producto)
        <article class="col-lg-3 p-lg-3 pb-lg-0 ms-lg-5 me-lg-5 col-md-5 p-md-3 pb-md-0 ms-md-4 me-md-4 mb-md-5 col-sm-5 p-sm-3 pb-sm-0 ms-sm-4 me-sm-4 mb-sm-5 col-9 p-3 pb-0 ms-5 me-4 mb-5">
            <!-- Carousel -->
            <div id="demo{{$producto->id}}" class="carousel slide" data-bs-ride="carousel">
            
                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                @foreach($producto->images as $key => $imagen)
                    <button type="button" data-bs-target="#demo{{$producto->id}}" data-bs-slide-to="{{ $key }}" class="{{ $key === 0 ? 'active' : '' }}"></button>
                @endforeach
                </div>
            
                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                @foreach($producto->images as $key => $imagen)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <img src="imagenes/{{ $imagen->url}}" class="d-block w-100">
                </div>
                @endforeach
                </div>
            
                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo{{$producto->id}}" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo{{$producto->id}}" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                </button>
            </div>
            <div class="text-center">
                <button id="btnGuardarPerfil" type="button" class="btn btn-primary">
                    <img src="imagenes/icon_agregarCarrito.png">
                </button>
            </div>
            <!--Texto-->
            <div id="infor" class="p-lg-2 p-md-2 p-sm-1 p-2">
                <h6 class="text-start mt-lg-2 mt-md-2 pt-sm-1 pt-2">{{$producto->name}}</h6>
                <p class="text-start mt-lg-3 mt-md-3 pt-sm-2 pt-3">Color: {{$producto->color}}<br>
                    Marca: {{$producto->brand}}<br>
                    Textura: {{$producto->texture}}<br>
                    Contenido: {{$producto->content}}</p>
                <p id="precio" class="text-start mt-lg-2 mt-md-2 pt-sm-2 pt-2">${{$producto->price}}</p>
            </div>
        </article>
        @endforeach
    </div> 
</section>
@endsection