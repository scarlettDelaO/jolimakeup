<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JoliMakeup</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css propios/estilo_navar rosa.css">
    <link rel="stylesheet" type="text/css" href="css propios/estilo_principal.css">
    <link rel="stylesheet" type="text/css" href="css propios/estilo_productos.css">
    <link rel="stylesheet" type="text/css" href="css propios/estilo_atencion.css">
</head>
<body class="row">
    <header class="row col-lg-12 col-md-12 col-sm-12 col-12 m-lg-0 m-md-0 m-sm-0 m-0 container-fluid">
        <nav class="navbar navbar-dark col-lg-12 col-md-12 col-sm-12 col-12 row m-lg-0 m-md-0 m-sm-0 m-0">
            <!-- NAV CONTAINER START -->
            <div class="row col-lg-12 col-md-12 col-sm-12 col-12 m-lg-0 m-md-0 m-sm-0 m-0">
                <a href="" class="navbar-brand m-0 p-2 col-lg-10 col-md-9 col-sm-8 col-7 m-lg-0 m-md-0 m-sm-0 m-0">
                    <img src="imagenes/logo1inicio.png" alt="Logo" style="width:180px;" class="ms-lg-4 ms-md-4 ms-sm-4 ms-1">
                </a>
                <div class="col-lg-2 row m-0 col-md-3 col-sm-4 col-5">
                    <a href="" class="navbar-brand text-info col-lg-4 col-md-4 col-sm-4 col-4 m-lg-0 m-md-0 m-sm-0 m-0">
                        <img clas="m-0" src="imagenes/bolsa icon.png" alt="Logo" style="width:100%;">
                    </a>
                    <a  clas="m-0" href="" class="navbar-brand text-info col-lg-4 col-md-4 col-sm-4 col-4 m-lg-0 m-md-0 m-sm-0 m-0">
                        <img src="imagenes/user.png" alt="Logo" style="width:100%;">
                    </a>
                <!-- NAV BUTTON  -->
                    <button
                        class="navbar-toggler col-lg-4 col-md-4 col-sm-4 col-4 m-lg-0 m-md-0 m-sm-0 m-0"
                        type="button"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#menuLateral"
                    >
                        <img clas="m-0" src="imagenes/icon_menu.png" alt="Logo" style="width:100%;">
                    </button>
                </div>
              <!-- OFFCANVAS MAIN CONTAINER START -->
              <section
                class="offcanvas offcanvas-end row col-12 pe-4"
                id="menuLateral"
                tabindex="-1"
              >
                <div class="offcanvas-header col-lg-12 col-md-12 col-sm-12 col-12 m-lg-0 m-md-0 m-sm-0 m-0 row">
                    <div class="col-9 m-0"></div>
                    <div class=" col-3 m-0 ps-3">
                        <button class="my-button col-12" data-bs-dismiss="offcanvas">
                            <img src="imagenes/icon_cerrar.png" style="width: 100%;">
                        </button>
                    </div>
                  <h2 class="">MENU</h2>
                </div>
                <!-- OFF CANVAS MENU LINKS  START-->
                <div
                  class="offcanvas-body d-flex flex-column justify-content-between px-0 ms-4 me-4" style="width: 87%;"
                >
                  <ul id="desp" class="navbar-nav fs-5 justify-content-evenly">
                    <li class="nav-item p-3 py-md-1 p-md-3">
                      <a href="" class="nav-link pt-md-3 pb-3">Ojos</a>
                    </li>
                    <li class="nav-item p-3 py-md-1 p-md-3">
                      <a href="" class="nav-link pt-md-3 pb-3">Rostro</a>
                    </li>
                    <li class="nav-item p-3 py-md-1 p-md-3">
                      <a href="" class="nav-link pt-md-3 pb-3">Labios</a>
                    </li>
                    <li class="nav-item p-3 py-md-1 p-md-3">
                      <a href="" class="nav-link pt-md-3 pb-3">Tools</a>
                    </li>
                  </ul>
                </div>
              </section>
              <!-- OFFCANVAS MAIN CONTAINER END  -->
            </div>
        </nav>
    </header>

    @yield('contenidoPrincipal')

    <footer
          class="text-center text-lg-start text-white"
          style="background-color: #1D1C1C"
          >
    <!-- Grid container -->
    <div class="container p-4 pb-0">

      <section  class="">
        <p  class="d-flex justify-content-center align-items-center">
          <span  id="sig" class="me-3"><img src="imagenes/SIGUENOS.png"style="width:100%;"></span>
        </p>
      </section>

      <!-- Section: Social media -->
      <section class="mb-2 text-center">
        <!-- Facebook -->
        <a
           class="btn btn-floating "
           href="#!"
           role="button"
           >
          <img src="imagenes/icon_facebook.png"style="width:90%;">
          </a>

        <!-- Twitter -->
        <a
           class="btn btn-floating "
           href="#!"
           role="button"
           ><img src="imagenes/icon_twitterX.png"style="width:90%;">
          </a>

        <!-- Pinterest -->
        <a
           class="btn btn-floating "
           href="#!"
           role="button"
           ><img src="imagenes/icon_pinterest.png" style="width:90%;">
          </a>

        <!-- Tiktok -->
        <a
           class="btn btn-floating "
           href="#!"
           role="button"
           ><img src="imagenes/icon_tiktok.png"style="width:90%;">
          </a>

        <!-- Instagram -->
        <a
           class="btn btn-floating "
           href="#!"
           role="button"
           ><img src="imagenes/icon_instagram.png"style="width:90%;">
          </a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3 row">
      <p class="col-3">Aviso de privacidad</p>
      <p class="col-3">Terminos y condiciones</p>
      <a href="#!" class="col-3"><p>Atencion al cliente</p></a>
      <p class="col-3">© 2020 Copyright:JM</p>
    </div>
    <!-- Copyright -->
  </footer>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>