@extends('padreN')
@section('contenidoPrincipal')
<section>
        <div class="contenedor">
           
        <img src="imagenes/logo1inicio.png" alt="Logo" style="width:150px;" class="ms-lg-4">

            
            <div>
                <br>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="">
            </div>

            <div>
                <label for="correo">Correo electrónico:</label>
                <input type="email" id="correo" name="correo" placeholder="">
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
    @endsection