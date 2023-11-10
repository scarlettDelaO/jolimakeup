@extends('padreNN')
@section('contenidoPrincipal')
<section class="row mt-5 mb-5">
        <div  class="col-sm-0 col-md-2 col-lg-3 "></div>
        <div id="formulario" class="col-sm-12 col-md-8 col-lg-6 p-5 mt-5 mb-5">
            <form action="/action_page.php">
                <div class="mb-4 mt-4">
                  <label for="nom" class="ps-2">Nombre</label>
                  <input type="text" class="form-control" id="nom" placeholder="" name="email">
                </div>
                <div class="mb-4">
                  <label for="email" class="ps-2">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="" name="pswd">
                </div>
                <div class="mb-4">
                    <label for="tel" class="ps-2">Teléfono</label>
                    <input type="text" class="form-control" id="tel" placeholder="" name="pswd">
                  </div>
                  <div class="mb-4">
                    <label for="pais" class="ps-2">País</label>
                    <input type="text" class="form-control" id="pais" placeholder="" name="pswd">
                  </div>
                  <div class="mb-4">
                    <label for="direc" class="ps-2">Dirección</label>
                    <input type="text" class="form-control" id="direc" placeholder="" name="pswd">
                  </div>
                  <div class="mb-4">
                    <label for="contr" class="ps-2">Contraseña</label>
                    <input type="password" class="form-control" id="contr" placeholder="" name="pswd">
                  </div>
                <div class=" text-end">
                <button id="btnGuardarPerfil" type="button" class="btn btn-primary mt-3">
                    <img src="imagenes/boton_continuar.png">
                </button>
                </div>
              </form>
        </div>
        <div class="col-sm-0 col-md-2 col-lg-3"></div>
</section>
@endsection