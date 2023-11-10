@extends('padreN')
@section('contenidoPrincipal')
<section class="row">
        <div id="lateral2" class="col-lg-4 p-lg-5 text-center">
            <h1 class="mb-4 mt-5">Perfil</h1>
            <img class="mt-5 mb-4 p-3" src="imagenes/img_perfil.png"style="width:90%;">
            <button id="btnCerrarSesion" type="button" class="btn btn-primary mt-3 ">
                <img src="imagenes/boton_cerrar.png">
            </button>
        </div>
        <div class="col-lg-8 p-5">
            <form action="/action_page.php">
                <div class="mb-4 mt-4">
                  <label for="nom" class="ps-2">Nombre</label>
                  <input type="text" class="form-control" id="nom" placeholder="Enter email" name="email">
                </div>
                <div class="mb-4">
                  <label for="email" class="ps-2">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter password" name="pswd">
                </div>
                <div class="mb-4">
                    <label for="tel" class="ps-2">Teléfono</label>
                    <input type="text" class="form-control" id="tel" placeholder="Enter password" name="pswd">
                  </div>
                  <div class="mb-4">
                    <label for="pais" class="ps-2">País</label>
                    <input type="text" class="form-control" id="pais" placeholder="Enter password" name="pswd">
                  </div>
                  <div class="mb-4">
                    <label for="direc" class="ps-2">Dirección</label>
                    <input type="text" class="form-control" id="direc" placeholder="Enter password" name="pswd">
                  </div>
                  <div class="mb-4">
                    <label for="contr" class="ps-2">Contraseña</label>
                    <input type="password" class="form-control" id="contr" placeholder="Enter password" name="pswd">
                  </div>
                <div class=" text-end">
                <button id="btnGuardarPerfil" type="button" class="btn btn-primary mt-3">
                    <img src="imagenes/boton_guardar.png">
                </button>
                </div>
              </form>
        </div>
</section>
@endsection