@extends('padreNN')
@section('contenidoPrincipal')
<section id="login" class="row">
    <div id="formulario" class="text-center col-sm-12 col-md-8 col-lg-6 p-5 mt-5 mb-5 contenedor">
        <img id="logo" src="imagenes/logo1inicio.png" alt="Logo" class="ms-lg-4">
        
        <!-- Formulario modificado para iniciar sesión -->
        <form action="perfil" method="post" onsubmit="return validarInicio();">
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

            <!-- Botón modificado para enviar el formulario -->
            
            <button id="btnIniciar" type="button" class="btn btn-primary mt-3">
               <a href="perfil"><img src="imagenes/IniciarSesion.png"></a> 
            </button>

            <div class="o-container">
                <div class="o-linea"></div>
                <span class="o-letra">o</span>
                <div class="o-linea"></div>
            </div>

            <!-- Botón de registro con JavaScript para redirigir -->
            <button id="btnRegistrarse" type="button" class="btn btn-secondary mt-3" onclick="window.location.href='registro'">
                <img src="imagenes/Registrarse.png">
            </button>
        </form>
    </div>
</section>

<script type="text/javascript" src="validacion.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
@endsection
