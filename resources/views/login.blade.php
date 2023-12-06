@extends('padreNN')
@section('contenidoPrincipal')
<section id="login" class="row">
    <div id="formulario" class="text-center col-sm-12 col-md-8 col-lg-6 p-5 mt-5 mb-5 contenedor">
        <img id="logo" src="imagenes/logo1inicio.png" alt="Logo" class="ms-lg-4">
        
        <!-- Formulario modificado para iniciar sesión -->
        <form action="{{ route('doLogin') }}" method="post" >
        @csrf
            <div class="form-group">
                <br>
                <br>
                <label for="correo">Correo electrónico:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="contra">Contraseña:</label>
                <input type="password" class="form-control" id="contra" name="password" required >
            </div>

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Botón modificado para enviar el formulario -->
            
            <button id="btnIniciar" type="submit" class="btn btn-primary mt-3">
               <img src="imagenes/IniciarSesion.png">
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
