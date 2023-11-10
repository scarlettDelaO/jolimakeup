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
        <div  class="col-sm-0 col-md-2 col-lg-3 "></div>
        <div id="formulario" class="col-sm-12 col-md-8 col-lg-6 p-5 mt-5 mb-5">
            <h1 class="text-center">Agregar</h1>
            <form action="/action_page.php" class="ms-4 me-4">
                <div class="mb-4 mt-4 row ps-3 text-sm-start">
                    <label for="nom" class="ps-2">Foto/s</label>
                    <button id="btnFotos" type="button">
                        Elige archivo
                    </button>
                </div>
                <div class="mb-4 mt-4 ">
                  <label for="nom" class="ps-2">Nombre</label>
                  <input type="text" class="form-control" id="nom" placeholder="" name="email">
                </div>
                <div class="mb-4">
                  <label for="email" class="ps-2">Descripcion</label>
                  <textarea class="form-control text-start" rows="4" id="comment" name="text">
                    Color
                    Marca
                    Textura
                    Contenido</textarea>
                </div>
                <div class="mb-4">
                    <label for="pais" class="ps-2">Categoria</label>
                    <div id="desplegable" class="dropdown text-end">
                        <button type="button" class="btn btn-dark dropdown-toggle " data-bs-toggle="dropdown">
                            <!-- Puedes agregar un ícono o texto aquí si lo deseas -->
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end"> <!-- Cambiado para posicionar a la derecha -->
                            <li><a class="dropdown-item text-start" href="#">Ojos</a></li>
                            <li><a class="dropdown-item text-start" href="#">Rostro</a></li>
                            <li><a class="dropdown-item text-start" href="#">Labios</a></li>
                            <li><a class="dropdown-item text-start" href="#">Tools</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="tel" class="ps-2">Precio</label>
                    <input type="text" class="form-control" id="tel" placeholder="" name="pswd">
                  </div>
                <div class="d-flex justify-content-between mt-5">
                    <button id="btnGuardarPerfil" type="button" class="btn btn-primary">
                        <img src="imagenes/boton_agregar.png">
                    </button>
                    <button id="btnGuardarPerfil" type="button" class="btn btn-primary">
                        <img src="imagenes/boton_cancelar.png">
                    </button>
                </div>
              </form>
        </div>
        <div class="col-sm-0 col-md-2 col-lg-3"></div>
    </section>

    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>