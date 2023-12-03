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

    <section class="row mt-5 mb-5">
        <div class="col-sm-0 col-md-2 col-lg-3 "></div>
        <div id="formulario" class="col-sm-12 col-md-8 col-lg-6 p-5 mt-5 mb-5">
        @csrf
        @method('PUT')
            <h1 class="text-center">Modificar</h1>
            <form action="{{ route('actualizar', $products->id) }}" class="ms-4 me-4" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">    
                <div class="mb-4 mt-4 row ps-3 pe-3 text-sm-start">
                    <label for="imageInput" class="ps-2">Foto/s</label>
                    <input type="file" id="imageInput" class="form-control pt-2 pb-3" multiple accept=".jpg, .jpeg, .png" onchange="validateImage()">
                </div>
                <div class="mb-4 mt-4 ">
                    <label for="nom" class="ps-2">Nombre</label>
                    <input type="text" class="form-control" id="nom" placeholder="" name="nombre" value="{{ $products->name }}">
                </div>
                <div class="mb-4">
                    <label for="descColor" class="ps-2">Descripción</label>
                    <input type="text" class="form-control mb-0" id="descColor" placeholder="Color" name="color" value="{{ $products->color }}">
                    <input type="text" class="form-control mb-0" id="descMarca" placeholder="Marca" name="marca" value="{{ $products->brand }}">
                    <input type="text" class="form-control mb-0" id="descTextura" placeholder="Textura" name="textura" value="{{ $products->texture }}">
                    <input type="text" class="form-control mb-0" id="descContenido" placeholder="Contenido" name="cont" value="{{ $products->content }}">
                </div>
                <div class="mb-4">
                    <label for="cate" class="ps-2">Categoría</label>
                    <select id="cate" class="form-control">
                    <option value="" disabled selected>Seleccione una categoría</option>
                    <option value="1" {{ $products->category_id == 1 ? 'selected' : '' }}>Ojos</option> 
                    <option value="2" {{ $products->category_id == 2 ? 'selected' : '' }}>Rostro</option> 
                    <option value="3" {{ $products->category_id == 3 ? 'selected' : '' }}>Labios</option> 
                    <option value="4" {{ $products->category_id == 4 ? 'selected' : '' }}>Tools</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="prec" class="ps-2">Precio</label>
                    <input type="text" class="form-control" id="prec" placeholder="" name="precio" value="{{ $products->price }}">
                </div>
                <div class="d-flex justify-content-between mt-5">
                    <button id="btnGuardar" type="button" class="btn btn-primary">
                        <img src="{{ asset('imagenes/boton_guardarModif.png') }}">
                    </button>
                    <button id="btnCancelar" type="button" class="btn btn-primary" onclick="history.back()">
                        <img src="{{ asset('imagenes/boton_cancelar.png') }}">
                    </button>
                </div>
            </form>
        </div>
        <div class="col-sm-0 col-md-2 col-lg-3"></div>

       
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    
</body>
</html>
