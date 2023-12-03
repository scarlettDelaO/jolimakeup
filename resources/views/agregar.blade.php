<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JoliMakeup</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css propios/estilo_agregar.css">
    
</head>
<body>
    <section class="row mt-5 mb-5">
        <div class="col-sm-0 col-md-2 col-lg-3 "></div>
        <div id="formulario" class="col-sm-12 col-md-8 col-lg-6 p-5 mt-5 mb-5">
            <h1 class="text-center">Agregar</h1>
            <form action="/action_page.php" class="ms-4 me-4" enctype="multipart/form-data">
                <div class="mb-4 mt-4 row ps-3 pe-3 text-sm-start">
                    <label for="imageInput" class="ps-2">Foto/s</label>
                    <input type="file" id="imageInput" class="form-control pt-2 pb-3" multiple accept=".jpg, .jpeg, .png" onchange="validateImage()">
                </div>
                <div class="mb-4 mt-4 ">
                  <label for="nom" class="ps-2">Nombre</label>
                  <input type="text" class="form-control" id="nom" placeholder="Nombre del producto" name="nombre">
                </div>
                <div class="mb-4">
                  <label for="desColor" class="ps-2">Descripcion</label>
                  <input type="text" class="form-control mb-0" id="desColor" placeholder="Color" name="color">
                  <input type="text" class="form-control mb-0" id="desMarca" placeholder="Marca" name="marca">
                  <input type="text" class="form-control mb-0" id="desTextura" placeholder="Textura" name="textura">
                  <input type="text" class="form-control mb-0" id="desContenido" placeholder="Contenido" name="cont">
                </div>
                <div class="mb-4">
                    <label for="desplegable" class="ps-2">Categoria</label>
                    <div id="desplegable" class="dropdown text-end">
                        <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown">
                            <!-- Texto o ícono aquí si es necesario -->
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item text-start" href="#">Ojos</a></li>
                            <li><a class="dropdown-item text-start" href="#">Rostro</a></li>
                            <li><a class="dropdown-item text-start" href="#">Labios</a></li>
                            <li><a class="dropdown-item text-start" href="#">Tools</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="precio" class="ps-2">Precio</label>
                    <input type="text" class="form-control" id="precio" placeholder="Precio del producto" name="precio">
                </div>
                <div class="d-flex justify-content-between mt-5">
                    <button id="btnGuardar" type="button" class="btn btn-primary" onclick="agregarProducto()">
                        <img src="imagenes/boton_agregar.png">
                    </button>
                    <button id="btnCancelar" type="button" class="btn btn-primary" onclick="history.back()">
                        <img src="imagenes/boton_cancelar.png">
                    </button>
                </div>
            </form>
        </div>
        <div class="col-sm-0 col-md-2 col-lg-3"></div>
        <!-- Alerta Agregar -->
        <div id="alertagregar" class="alerta-oculta">
            <div class="alerta-contenido">
                <p>El producto ha sido agregado con éxito a la lista.</p>
                <button id="botonCerrar" onclick="history.back()">
                    <img src="imagenes/ok.png" >
                </button>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    
    <script type="text/javascript" src="alert.js"></script>
    
</body>
</html>
