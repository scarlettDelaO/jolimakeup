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

            <article class="col-lg-3 p-lg-3 pb-lg-0 ms-lg-5 me-lg-5 col-md-5 p-md-3 pb-md-0 ms-md-4 me-md-4 mb-md-5 col-sm-5 p-sm-3 pb-sm-0 ms-sm-4 me-sm-4 mb-sm-5 col-9 p-3 pb-0 ms-5 me-4 mb-5">
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
  
                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
            
                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagenes/delineador_a1.jpg" alt="Los Angeles" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="imagenes/delineador_a2.png" alt="Chicago" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="imagenes/delineador_a3.png" alt="New York" class="d-block w-100">
                </div>
                </div>
            
                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
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
                <h6 class="text-start mt-lg-2 mt-md-2 pt-sm-1 pt-2">Delineador glitter de ojos liquido</h6>
                <p class="text-start mt-lg-3 mt-md-3 pt-sm-2 pt-3">Color: Dorado<br>
                    Marca: Avierll<br>
                    Textura: Gel<br>
                    Contenido: 0.07 oz</p>
                <p id="precio" class="text-start mt-lg-2 mt-md-2 pt-sm-2 pt-2">$59.80</p>
            </div>
        </article>
  
        <article class="col-lg-3 p-lg-3 pb-lg-0 ms-lg-5 me-lg-5 col-md-5 p-md-3 pb-md-0 ms-md-4 me-md-4 mb-md-5 col-sm-5 p-sm-3 pb-sm-0 ms-sm-4 me-sm-4 mb-sm-5 col-9 p-3 pb-0 ms-5 me-4 mb-5">
            <!-- Carousel -->
            <div id="demo2" class="carousel slide" data-bs-ride="carousel">
    
                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo2" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo2" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo2" data-bs-slide-to="2"></button>
                </div>
    
                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagenes/sombra_a1.png" alt="Los Angeles" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="imagenes/sombra_a2.jpg" alt="Chicago" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="imagenes/sombra_a3.jpg" alt="New York" class="d-block w-100">
                </div>
                </div>
    
                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo2" data-bs-slide="next">
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
                <h6 class="text-start mt-lg-2 mt-md-2 pt-sm-1 pt-2">Sombra de ojos brillante y mate</h6>
                <p class="text-start mt-lg-3 mt-md-3 pt-sm-2 pt-3">
                    Color: Multicolor<br>
                    Marca: Dikalucrs<br>
                    Textura: Polvo compacto<br>
                    Contenido: 7 g
                </p>
                <p id="precio" class="text-start mt-lg-2 mt-md-2 pt-sm-2 pt-2">$71.10</p>
            </div>
        </article>
  
        <article class="col-lg-3 p-lg-3 pb-lg-0 ms-lg-5 me-lg-5 col-md-5 p-md-3 pb-md-0 ms-md-4 me-md-4 mb-md-5 col-sm-5 p-sm-3 pb-sm-0 ms-sm-4 me-sm-4 mb-sm-5 col-9 p-3 pb-0 ms-5 me-4 mb-5">
            <!-- Carousel -->
            <div id="demo3" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo3" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo3" data-bs-slide-to="1"></button>
                </div>
    
                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagenes/mascara_a1.png" alt="Los Angeles" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="imagenes/mascara_a2.png" alt="Chicago" class="d-block w-100">
                </div>
                </div>
                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo3" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo3" data-bs-slide="next">
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
                <h6 class="text-start mt-lg-2 mt-md-2 pt-sm-1 pt-2">Mascara de vol. para pestañas </h6>
                <p class="text-start mt-lg-3 mt-md-3 pt-sm-2 pt-3">
                    Color: Negro<br>
                    Marca: Music Flower<br>
                    Textura: Crema<br>
                    Contenido: 12 g
                </p>
                <p id="precio" class="text-start mt-lg-2 mt-md-2 pt-sm-2 pt-2">$80.80</p>
            </div>
        </article>
    </div> 
</section>
@endsection