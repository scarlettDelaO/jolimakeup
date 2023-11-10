@extends('padreN')
@section('contenidoPrincipal')
<section>
        <div id="formulario" class="col-sm-12 col-md-8 col-lg-6 p-5 mt-5 mb-5" class="contenedor">
           
        <img id ="logo" src="imagenes/logo1inicio.png" alt="Logo"  class="ms-lg-4">

            
            <div>
                <br>
                <label for="correo">Correo electrónico:</label>
                <input type="email" id="correo" name="correo" placeholder="">
            </div>

            <div>
                <label for="contra">Contraseña:</label>
                <input type="password" id="contra" name="contra" placeholder="">
            </div>

            <div class="botones">
            <button id="btnIniciar" type="button" class="btn btn-primary mt-3">
                    <img src="imagenes/IniciarSesion.png">
                </button>

                <div class="o-container">
                    <div class="o-linea"></div>
                    <span class="o-letra">o</span>
                    <div class="o-linea"></div>
                </div>

                <button id="btnRegistrarse" type="button" class="btn btn-primary mt-3">
                    <img src="imagenes/Registrarse.png">
                </button>

            </div>
        </div>
    </section>
    <script type="text/javascript" src="validacion.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    @endsection