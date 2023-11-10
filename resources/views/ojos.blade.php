@extends('padreNF')
@section('contenidoPrincipal')
<section class="row ps-lg-5 mb-5">
        <div id="titulo" class="row p-lg-5 mb-lg-0 col-lg-12">
            <div class="col-lg-4"></div>
            <h1 class="col-lg-4 text-center pe-5">Ojos</h1>
            <div class="col-lg-1"></div>
            <div id="desplegable" class="col-lg-3 text-center row">
                <h5 class="col-lg-3 ps-5 pt-1">Filtro</h5>
                <div class="col-lg-9 dropdown">
                    <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" style="width: 80%;">
                    Menor precio     
                    </button>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Todos</a></li>
                    <li><a class="dropdown-item" href="#">Tendencia</a></li>
                    <li><a class="dropdown-item" href="#">Menor precio</a></li>
                    <li><a class="dropdown-item" href="#">Mayor precio</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <article class="col-lg-3 text-center p-4 me-lg-5 ms-lg-5">
            <!-- Carousel -->
            <div id="demo" class="carousel slide ms-lg-1" data-bs-ride="carousel">

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
            <button id="btnGuardarPerfil" type="button" class="btn btn-primary">
                <img src="imagenes/icon_agregarCarrito.png">
            </button>
            <!--Texto-->
            <div id="infor" class="ps-3">
                <h6 class="text-start mt-4">Delineador glitter de ojos liquido</h6>
                <p class="text-start">Color: Dorado<br>
                    Marca: Avierll<br>
                    Textura: Gel<br>
                    Contenido: 0.07 oz</p>
                <p id="precio" class="text-start">$59.80</p>
            </div>
        </article>

        <article class="col-lg-3 text-center p-4 me-lg-5 ms-lg-5">
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
            <button id="btnGuardarPerfil" type="button" class="btn btn-primary">
                <img src="imagenes/icon_agregarCarrito.png">
            </button>
            <!--Texto-->
            <div id="infor" class="ps-3">
                <h6 class="text-start mt-4">Sombra de ojos brillante y mate</h6>
                <p class="text-start">
                    Color: Multicolor<br>
                    Marca: Dikalucrs<br>
                    Textura: Polvo compacto<br>
                    Contenido: 7 g
                </p>
                <p id="precio" class="text-start">$71.10</p>
            </div>
        </article>

        <article class="col-lg-3 text-center p-4 me-lg-5 ms-lg-5">
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
            <button id="btnGuardarPerfil" type="button" class="btn btn-primary">
                <img src="imagenes/icon_agregarCarrito.png">
            </button>
            <!--Texto-->
            <div id="infor" class="ps-3">
                <h6 class="text-start mt-4">Mascara de vol. para pestañas </h6>
                <p class="text-start">
                    Color: Negro<br>
                    Marca: Music Flower<br>
                    Textura: Crema<br>
                    Contenido: 12 g
                </p>
                <p id="precio" class="text-start">$80.80</p>
            </div>
        </article>
</section>
@endsection