@extends('padreNN')
@section('contenidoPrincipal')
<section>
        <div id="formulario" class=" text-center col-sm-12 col-md-8 col-lg-6 p-5 mt-5 mb-5 contenedor">
            <img id="logo" src="imagenes/logo1inicio.png" alt="Logo" class="ms-lg-4">
            
            <form action="/../view/perfil" method=" post" onsubmit="return validarInicio();">
                <div class="form-group">
                    <br>
                    <br>
                    <label for="correo">Correo electrónico:</label>
                    <input type="email" class="form-control" id="correo" name="correo" >
                </div>

                <div class="form-group">
                    <label for="contra">Contraseña:</label>
                    <input type="password" class="form-control" id="contra" name="contra" >
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

                <button id="btnRegistrarse" type="button" class="btn btn-secondary mt-3">
                    <img src="imagenes/Registrarse.png">
                </button>
            </form>
        </div>
    </section>

    <script type="text/javascript" src="validacion.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    @endsection