@extends('padreN')
@section('contenidoPrincipal')
<section class="row col-md-12 col-sm-12 m-0">
        <div id="lateral2" class="col-lg-4 p-lg-5 text-center col-md-4 col-sm-12 p-sm-0 row m-sm-0 col-12 m-0 p-0 mb-5 row">
            <h1 class="col-lg-12 mb-lg-4 mt-lg-5 mt-md-3 mt-sm-2 col-sm-6 ms-sm-0 me-sm-0 col-md-12 mt-md-5 m-md-0 p-md-0 m-0">Perfil</h1>
            <div id="perlat" class="col-lg-12 p-lg-3 col-sm-6 ms-sm-0 me-sm-0 ps-sm-5 pe-sm-5 pb-sm-0 col-md-12 m-md-0 p-md-0">
              <img id="imper" class="mt-lg-1 mb-lg-4 p-lg-3 p-sm-2 mt-sm-4 mb-sm-0 col-md-12 mt-md-0 pt-md-0 p-5" src="imagenes/img_perfil.png"style="width:90%;">
              <button id="btnCerrarSesion" type="submit" class="btn btn-primary mt-lg-3 " onclick="mostrarAlertaCerrarSesion()">
                <img src="imagenes/boton_cerrar.png">
              </button>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 p-5 col-sm-12">
        <form action="{{ route('perfil', $user->name) }}" method="post">
          @csrf
          @method('PUT')
            <input type="hidden" name="_method" value="PUT">
                <div class="mb-4 mt-4">
                  <label for="nom" class="ps-2">Nombre</label>
                  <input type="text" class="form-control" id="nom" placeholder="Enter email" name="nom" value="{{$user->name}}">
                </div>
                <div class="mb-4">
                  <label for="email" class="ps-2">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter password" name="email" value="{{$user->email}}">
                </div>
                <div class="mb-4">
                    <label for="tel" class="ps-2">Teléfono</label>
                    <input type="text" class="form-control" id="tel" placeholder="Enter password" name="tel" value="{{$user->phone}}">
                  </div>
                  <div class="mb-4">
                    <label for="pais" class="ps-2">País</label>
                    <input type="text" class="form-control" id="pais" placeholder="Enter password" name="pais" value="{{ $user->country->name ?? 'No definido' }}">
                  </div>
                  <div class="mb-4">
                    <label for="direc" class="ps-2">Dirección</label>
                    <input type="text" class="form-control" id="direc" placeholder="Enter password" name="direc" value="{{$user->adress}}">
                  </div>
                  <div class="mb-4">
                    <label for="contr" class="ps-2">Contraseña</label>
                    <input type="password" class="form-control" id="contr" placeholder="Enter password" name="contra" value="{{$user->password}}">
                  </div>
                <div class=" text-end">
                <button id="btnGuardarPerfil" type="submit" class="btn btn-primary mt-3">
                    <img src="imagenes/boton_guardar.png">
                </button>
                </div>
              </form>
        </div>
        <!-- Alerta para confirmar el cierre de sesión -->
        <div id="alertCerrarSesion" class="alerta-oculta" style="display: none;">
            <div class="alerta-contenido">
                <p>Has cerrado sesión con éxito. ¡Esperamos que vuelvas pronto!</p>
                <button id="botonCerrar">
                    <img src="imagenes/ok.png" alt="">
                </button>
        </div>

        <!-- Alerta Modificar Perfil -->
        @if (session('success'))
            <div id="alertModi" class="alerta-oculta">
                <div class="alerta-contenido">
                    <p>{{ session('success') }}</p>
                    <button id="botonCerrar">
                        <img src="imagenes/ok.png">
                    </button>
                </div>
            </div>
        @endif
    </div>
    

</section>

<script>
        document.addEventListener('DOMContentLoaded', (event) => {
            if (document.getElementById('alertModi')) {
                document.getElementById('alertModi').style.display = 'flex';
            }
        });


        document.getElementById('botonCerrar').onclick = function() {
            document.getElementById('alertModi').style.display = 'none';
            window.location.href = 'perfil';
        };
    </script>

<script type="text/javascript" src="cerrar.js"></script>
@endsection