<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JoliMakeup</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css propios/estilo_navar dark.css">
    <link rel="stylesheet" type="text/css" href="css propios/estilo_atencion.css">

    <body class="row">
    <header class="row col-lg-12 col-md-12 col-sm-12 col-12 m-lg-0 m-md-0 m-sm-0 m-0 container-fluid">
        <nav class="navbar navbar-dark col-lg-12 col-md-12 col-sm-12 col-12 row m-lg-0 m-md-0 m-sm-0 m-0">
            <!-- NAV CONTAINER START -->
            <div class="row col-lg-12 col-md-12 col-sm-12 col-12 m-lg-0 m-md-0 m-sm-0 m-0">
                <a href="" class="navbar-brand m-0 p-2 col-lg-10 col-md-9 col-sm-8 col-7 m-lg-0 m-md-0 m-sm-0 m-0">
                    <img src="imagenes/icon_casa.png" alt="Logo" style="width:40px;" class="ms-lg-4 ms-md-4 ms-sm-4 ms-1">
                </a>
                <div class="col-lg-2 row m-0 col-md-3 col-sm-4 col-5">
                    <a href="" class="navbar-brand text-info col-lg-4 col-md-4 col-sm-4 col-4 m-lg-0 m-md-0 m-sm-0 m-0">
                        <img clas="m-0" src="imagenes/bolsa rosa.png" alt="Logo" style="width:100%;">
                    </a>
                    <a  clas="m-0" href="" class="navbar-brand text-info col-lg-4 col-md-4 col-sm-4 col-4 m-lg-0 m-md-0 m-sm-0 m-0">
                        <img src="imagenes/user_rosa.png" alt="Logo" style="width:100%;">
                    </a>
                <!-- NAV BUTTON  -->
                    <button
                        class="navbar-toggler col-lg-4 col-md-4 col-sm-4 col-4 m-lg-0 m-md-0 m-sm-0 m-0"
                        type="button"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#menuLateral"
                    >
                        <img clas="m-0" src="imagenes/menu rosa.png" alt="Logo" style="width:100%;">
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


<section id="aten">
<div class="container">
  <form class="customer-service-form">
    <h2>Atención al cliente</h2>
    <p>Querido cliente para ayudarlo seleccione la opción que mejor describa el inconveniente:</p>

<div id="tags">
<label><input type="radio" name="issue" value="defective"> Producto defectuoso</label>
    <label><input type="radio" name="issue" value="not_arrived"> No ha llegado el producto</label>
    <label><input type="radio" name="issue" value="extra_charges"> Cargos de más</label>
    <label><input type="radio" name="issue" value="cancel_order"> Cancelar pedido</label>
    <label><input type="radio" name="issue" value="wrong_product"> Producto incorrecto</label>
    <div class="other-issue">
    <label><input type="radio" name="issue" value="other"> Otro inconveniente:</label>
    <input type="text" name="other_issue" disabled>
  </div>


  <div id="user" class="user-info">
  <label for="username">Usuario:  <input type="text" id="username" name="username"></label>
  
</div>
    </div>

    <button id="btnEnviar" type="button" class="btn btn-secondary mt-3">
                    <img src="imagenes/boton_enviar.png">
                </button>
  </form>
</div>
</section>

<script>
// JavaScript para habilitar el campo de texto cuando se selecciona "Otro inconveniente:"
const radioButtons = document.querySelectorAll('input[type="radio"][name="issue"]');
radioButtons.forEach(radio => {
  radio.addEventListener('change', function() {
    document.querySelector('input[name="other_issue"]').disabled = this.value !== "other";
  });
});
</script>
<script type="text/javascript col-md-2" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>