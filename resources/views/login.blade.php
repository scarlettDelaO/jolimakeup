@extends('padreN')
@section('contenidoPrincipal')
<section>
        <div class="contenedor">
           
            <img id="logo" src="public/imagenes/logo1.png" alt="Logo">

            
            <div>
                <br>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre">
            </div>

            <div>
                <label for="correo">Correo electrónico:</label>
                <input type="email" id="correo" name="correo" placeholder="Ingrese su correo electrónico">
            </div>

            <div class="botones">
                <button onclick="iniciarSesion()">Iniciar Sesión</button>

                <div class="o-container">
                    <div class="o-linea"></div>
                    <span class="o-letra">o</span>
                    <div class="o-linea"></div>
                </div>

                <button onclick="registrarse()">Registrarse</button>
            </div>
        </div>
    </section>
    @endsection