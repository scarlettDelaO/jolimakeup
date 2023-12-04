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
            <form action="productos" method="post" class="ms-4 me-4" enctype="multipart/form-data">


            @csrf
                <div class="mb-4 mt-4 row ps-3 pe-3 text-sm-start">
                    <label for="imageInput" class="ps-2">Foto/s</label>
                    <input type="file" id="imageInput" class="form-control pt-2 pb-3" multiple accept=".jpg, .jpeg, .png" name="foto" onchange="validateImage()">
                </div>
                <div class="mb-4 mt-4 ">
                  <label for="nom" class="ps-2">Nombre</label>
                  <input type="text" class="form-control" id="name" placeholder="Nombre del producto" name="nombre">
                </div>
                <div class="mb-4">
                  <label for="desColor" class="ps-2">Descripcion</label>
                  <input type="text" class="form-control mb-0" id="color" placeholder="Color" name="color">
                  <input type="text" class="form-control mb-0" id="brand" placeholder="Marca" name="marca">
                  <input type="text" class="form-control mb-0" id="texture" placeholder="Textura" name="textura">
                  <input type="text" class="form-control mb-0" id="content" placeholder="Contenido" name="cont">
                </div>
                <div class="mb-4">
                    <label for="desplegable" class="ps-2">Categoria</label>
                    <div id="desplegable" class="row col-lg-12 m-0 mt mt-lg-0 mb-lg-3 col-md-12 mt-md-0 mb-md-3 col-sm-12 mt-sm-2 mb-sm-2 col-12 mt-2 mb-3" >
                    <select id="category_id" class="form-control" name="cate">
                    <option value="" disabled selected>Seleccione una categoría</option>
                    <option value="1">Ojos</option> 
                    <option value="2">Rostro</option> 
                    <option value="3">Labios</option> 
                    <option value="4">Tools</option>
                    </select>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="precio" class="ps-2">Precio</label>
                    <input type="text" class="form-control" id="price" placeholder="Precio del producto" name="precio">
                </div>
                <div class="d-flex justify-content-between mt-5">
                    <button id="btnGuardar" type="submit" class="btn btn-primary" onclick="agregarProducto()" >
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
        
            <div id="alertAgregar" class="alerta-oculta">
                <div class="alerta-contenido">
                    <p>El producto ha sido agregado con éxito a la lista.</p>
                    <button id="botonCerrar">
                        <img src="imagenes/ok.png">
                    </button>
                </div>
            </div>
        


    </section>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="agregar.js"></script>
    
    
</body>
</html>
