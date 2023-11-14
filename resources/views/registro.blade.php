@extends('padreNN')
@section('contenidoPrincipal')
<section id="registro" class="row ">
  <div  class=" mt-5 mb-5 col-1 col-sm-1 col-md-2 col-lg-3 "></div>
    <div id="formulario" class="col-10 col-sm-10 col-md-8 col-lg-6 p-5 mt-5 mb-5" >
      <h3 class="text-center">Registro</h3>
        <form action="perfil" method="" onsubmit="return validarRegistro();">
          <div class="mb-4 mt-4">
            <label for="nom" class="ps-2">Nombre</label>
            <input type="text" class="form-control" id="nom" placeholder="" name="nom">
          </div>
          <div class="mb-4">
            <label for="email" class="ps-2">Email</label>
            <input type="email" class="form-control" id="email" placeholder="" name="email">
          </div>
          <div class="mb-4">
              <label for="tel" class="ps-2">Teléfono</label>
              <input type="text" class="form-control" id="tel" placeholder="" name="tel">
          </div>
          <div class="mb-4">
            <label for="pais" class="ps-2">País</label>
            <input type="text" class="form-control" id="pais" placeholder="" name="pais">
          </div>
          <div class="mb-4">
            <label for="direc" class="ps-2">Dirección</label>
            <input type="text" class="form-control" id="direc" placeholder="" name="direc">
          </div>
          <div class="mb-4">
            <label for="contr" class="ps-2">Contraseña</label>
            <input type="password" class="form-control" id="contra" placeholder="" name="contra">
          </div>
          <div class=" text-end">
            <button id="btnGuardarPerfil" type="submit" class="btn btn-primary mt-3">
              <img src="imagenes/boton_continuar.png">
            </button>
          </div>
        </form>
      </div>
    <div class="col-1 col-sm-1 col-md-2 col-lg-3"></div>
  </section>
  <script type="text/javascript" src="validacion.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
@endsection