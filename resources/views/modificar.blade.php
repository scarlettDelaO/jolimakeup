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
            <h1 class="text-center">Modificar</h1>
            <form action="/action_page.php" class="ms-4 me-4" enctype="multipart/form-data">
                <div class="mb-4 mt-4 row ps-3 pe-3 text-sm-start">
                    <label for="imageInput" class="ps-2">Foto/s</label>
                    <input type="file" id="imageInput" class="form-control pt-2 pb-3" multiple accept=".jpg, .jpeg, .png" onchange="validateImage()">
                </div>
                <div class="mb-4 mt-4 ">
                    <label for="nom" class="ps-2">Nombre</label>
                    <input type="text" class="form-control" id="nom" placeholder="" name="nom">
                </div>
                <div class="mb-4">
                    <label for="descColor" class="ps-2">Descripción</label>
                    <input type="text" class="form-control mb-0" id="descColor" placeholder="Color" name="color">
                    <input type="text" class="form-control mb-0" id="descMarca" placeholder="Marca" name="marca">
                    <input type="text" class="form-control mb-0" id="descTextura" placeholder="Textura" name="textura">
                    <input type="text" class="form-control mb-0" id="descContenido" placeholder="Contenido" name="cont">
                </div>
                <div class="mb-4">
                    <label for="cate" class="ps-2">Categoría</label>
                    <select id="cate" class="form-control">
                        <option value="" disabled selected>Seleccione una categoría</option>
                        <option>Ojos</option>
                        <option>Rostro</option>
                        <option>Labios</option>
                        <option>Tools</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="prec" class="ps-2">Precio</label>
                    <input type="text" class="form-control" id="prec" placeholder="" name="prec">
                </div>
                <div class="d-flex justify-content-between mt-5">
                    <button id="btnGuardar" type="button" class="btn btn-primary" onclick="agregarProducto()">
                        <img src="imagenes/boton_guardarModif.png">
                    </button>
                    <button id="btnCancelar" type="button" class="btn btn-primary" onclick="history.back()">
                        <img src="imagenes/boton_cancelar.png">
                    </button>
                </div>
            </form>
        </div>
        <div class="col-sm-0 col-md-2 col-lg-3"></div>

        <!-- Alerta Modificar -->
        <div id="alertModificar" class="alerta-oculta">
            <div class="alerta-contenido">
                <p>El producto ha sido modificado con éxito.</p>
                <a href="productos">
                <button id="botonCerrar" onclick="history.back()">
                    <img src="imagenes/ok.png">
                </button>
                </a>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="modi.js"></script>
</body>
</html>
