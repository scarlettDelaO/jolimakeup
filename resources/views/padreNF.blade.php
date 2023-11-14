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
<body>
    <head >
        <nav class="navbar navbar-dark">
            <!-- NAV CONTAINER START -->
            <div class="container-fluid">
                <a href="" class="navbar-brand text-info">
                    <img src="imagenes/logo1inicio.png" alt="Logo" style="width:150px;" class="ms-lg-4">
                </a>
                <div style="width: 70%"></div>
                <a href="" class="navbar-brand text-info">
                    <img src="imagenes/bolsa icon.png" alt="Logo" style="width:37px;">
                </a>
                
                <a href="" class="navbar-brand text-info">
                    <img src="imagenes/user.png" alt="Logo" style="width:37px;">
                </a>
              <!-- NAV BUTTON  -->
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#menuLateral"
                style="width:40px; color: black;"
              >
                <img src="imagenes/icon_menu.png" alt="Logo" style="width:30px;">
              </button>
              <!-- OFFCANVAS MAIN CONTAINER START -->
              <section
                class="offcanvas offcanvas-end"
                id="menuLateral"
                tabindex="-1"
              >
                <div class="offcanvas-header" data-bs-theme="dark">
                  <h5 class="offcanvas-title text-info">Menú</h5>
                  <button
                    class="btn-close"
                    type="button"
                    aria-label="Close"
                    data-bs-dismiss="offcanvas"
                  ></button>
                </div>
                <!-- OFF CANVAS MENU LINKS  START-->
                <div
                  class="offcanvas-body d-flex flex-column justify-content-between px-0"
                >
                  <ul class="navbar-nav fs-5 justify-content-evenly">
                    <li class="nav-item p-3 py-md-1">
                      <a href="" class="nav-link">Ojos</a>
                    </li>
                    <li class="nav-item p-3 py-md-1">
                      <a href="" class="nav-link">Rostro</a>
                    </li>
                    <li class="nav-item p-3 py-md-1">
                      <a href="" class="nav-link">Labios</a>
                    </li>
                    <li class="nav-item p-3 py-md-1">
                      <a href="" class="nav-link">Tools</a>
                    </li>
                  </ul>
                </div>
              </section>
              <!-- OFFCANVAS MAIN CONTAINER END  -->
            </div>
        </nav>
    </head>

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