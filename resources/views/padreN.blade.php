<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JoliMakeup</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css propios/estilo_navar rosa.css">
    <link rel="stylesheet" type="text/css" href="css propios/estilo_principal.css">
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
                  <h5 class="offcanvas-title text-info">EMPRINNOS</h5>
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
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>