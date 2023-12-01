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
            <h1 class="text-center">Modificar</h1>
            <form method="post" action="/" class="ms-4 me-4">
                <div class="mb-4 mt-4 row ps-3 pe-3 text-sm-start">
                    <label for="imageInput" class="ps-2">Foto/s</label>
                    <input type="file" id="imageInput" for="filePhoto" class="form-control pt-2 pb-3" multiple accept=".jpg, .jpeg, .png" onchange="validateImage()">
                </div>
                <div class="mb-4 mt-4 ">
                  <label for="nom" class="ps-2">Nombre</label>
                  <input type="text" class="form-control" id="nom" placeholder="" name="nom" value="Delineador liquido punta fina">
                </div>
                <div class="mb-4">
                  <label for="email" class="ps-2">Descripcion</label>
                  <input type="text" class="form-control mb-0" id="des" placeholder="Color" name="color" value="Negro">
                  <input type="text" class="form-control mb-0" id="des" placeholder="Marca" name="marca" value="JLO">
                  <input type="text" class="form-control mb-0" id="des" placeholder="Textura" name="textura" value="Liquido">
                  <input type="text" class="form-control mb-0" id="des" placeholder="Contenido" name="cont" value="13 gr">
                </div>
                <div class="mb-4">
                    <label for="pais" class="ps-2">Categoria</label>
                    <div id="desplegable" class="row col-lg-12 m-0 mt mt-lg-0 mb-lg-3 col-md-12 mt-md-0 mb-md-3 col-sm-12 mt-sm-2 mb-sm-2 col-12 mt-2 mb-3" >
                        <select class="col-lg-8 m-0 col-md-8 col-sm-9 col-9" id="cate">
                          <datalist class="pt-5 pb-5">
                            <option selected="true" disabled id="default"></option>
                            <option>Ojos</option>
                            <option>Rostro</option>
                            <option>Labios</option>
                            <option>Tools</option>
                          </datalist>
                        </select>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="tel" class="ps-2">Precio</label>
                    <input type="text" class="form-control" id="prec" placeholder="" name="prec" value="300.08">
                  </div>
                <div class="d-flex justify-content-between mt-5">
                    <button id="btnGuardarPerfil" type="submit" class="btn btn-primary">
                        <img src="imagenes/boton_guardarModif.png">
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