<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JoliMakeup</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css_propios/estilo_agregar.css') }}">

</head>
<body>
    <style>
        body {
            background-image: url('../imagenes/fondo_agregar.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100%;
        }

        h1 {
            font-family: "KG Take On The World";
        }

        #formulario {
            background-color: rgba(225, 225, 225, 0.8);
        }

        #desplegable button {
            width: 100%;
            height: 50px;
            background-color: #fff;
            border: none;
        }

        #btnFotos {
            width: 40%;
            height: 40px;
            border: none;
            background-color: #fff;
            border-radius: 5px;
        }

        #formulario ul {
            width: 100%;
        }

        #btnGuardar .navbar-toggler {
            border: 0px;
        }

        #btnGuardar,
        #btnCancelar {
            background-color: #ffffff00;
            border: 0px;
        }

        #btnGuardar img,
        #btnCancelar img {
            width: 80%;
        }

        input,
        .form-control {
            height: 50px;
        }

        #des input {
            border: 0px;
        }
        .alerta-oculta {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .alerta-contenido {
            background-color: #ffc0cb;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }

        #botonCerrar {
            background-color: transparent;
            border: none;
            padding: 10px 20px;
            text-transform: lowercase;
            cursor: pointer;
        }

        #botonCerrar img {
            width: 80%;
        }
    </style>

    <section class="row mt-5 mb-5">
        <div class="col-sm-0 col-md-2 col-lg-3 "></div>
        <div id="formulario" class="col-sm-12 col-md-8 col-lg-6 p-5 mt-5 mb-5">
            <h1 class="text-center">Modificar</h1>
            <form action="{{ route('actualizar', $product->id) }}" method="POST" class="ms-4 me-4" enctype="multipart/form-data">
                @csrf @method('PUT')
                <input type="hidden" name="_method" value="PUT">
            
                <div class="mb-4 mt-4 row ps-3 pe-3 text-sm-start">
                    <label for="imageInput" class="ps-2">Foto/s</label>
                    <input type="file" id="imageInput" class="form-control pt-2 pb-3" multiple accept=".jpg, .jpeg, .png" onchange="validateImage()">
                </div>
                <div class="mb-4 mt-4 ">
                    <label for="nombre" class="ps-2">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="" name="nombre" value="{{$product->name}}">
                </div>
                <div class="mb-4">
                    <label for="descri" class="ps-2">Descripción</label>
                    <input type="text" class="form-control mb-0" id="color"  name="color" value="{{$product->color}}">
                    <input type="text" class="form-control mb-0" id="marca"  name="marca" value="{{$product->brand}}">
                    <input type="text" class="form-control mb-0" id="textura"  name="textura" value="{{$product->texture}}">
                    <input type="text" class="form-control mb-0" id="cont"  name="cont" value="{{$product->content}}">
                </div>
                <div class="mb-4">
                    <label for="cate" class="ps-2">Categoría</label>
                    <select id="cate" class="form-control" name="cate">
                        <option value="" disabled selected>Seleccione una categoría</option>
                        <option value="1" {{ $product->category_id == 1 ? 'selected' : '' }}>Ojos</option> 
                        <option value="2" {{ $product->category_id == 2 ? 'selected' : '' }}>Rostro</option> 
                        <option value="3" {{ $product->category_id == 3 ? 'selected' : '' }}>Labios</option> 
                        <option value="4" {{ $product->category_id == 4 ? 'selected' : '' }}>Tools</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="prec" class="ps-2">Precio</label>
                    <input type="text" class="form-control" id="prec"  name="precio" value="{{$product->price}}">
                </div>
                <div class="d-flex justify-content-between mt-5">
                    <button id="btnGuardar" type="submit" class="btn btn-primary">
                        <img src="{{asset('imagenes/boton_guardarModif.png')}}">
                    </button>
                    <button id="btnCancelar" type="button" class="btn btn-primary" onclick="history.back()">
                        <img src="{{asset('imagenes/boton_cancelar.png')}}">
                    </button>
                </div>
            </form>
        </div>
        <div class="col-sm-0 col-md-2 col-lg-3"></div>

        <!-- Alerta Modificar -->
        @if (session('success'))
            <div id="alertModi" class="alerta-oculta">
                <div class="alerta-contenido">
                    <p>{{ session('success') }}</p>
                    <button id="botonCerrar">
                        <img src="{{asset('imagenes/imagenes/ok.png')}}">
                    </button>
                </div>
            </div>
        @endif

        
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            if (document.getElementById('alertModi')) {
                document.getElementById('alertModi').style.display = 'flex';
            }
        });


        document.getElementById('botonCerrar').onclick = function() {
            document.getElementById('alertModi').style.display = 'none';
            window.location.href = 'productos';
        };
    </script>

    
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    
</body>
</html>
