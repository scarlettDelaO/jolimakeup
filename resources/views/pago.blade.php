<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css propios/estilo_navar pago.css">
    <link rel="stylesheet" type="text/css" href="css propios/estilo_pago.css">
</head>
<body>
    <header class="row col-lg-12 col-md-12 col-sm-12 col-12 m-lg-0 m-md-0 m-sm-0 m-0 ">
        <nav class="navbar navbar-dark col-lg-12 col-md-12 col-sm-12 col-12 row m-lg-0 m-md-0 m-sm-0 m-0">
            <!-- NAV CONTAINER START -->
            <div class="row col-lg-12 col-md-12 col-sm-12 col-12 m-lg-0 m-md-0 m-sm-0 m-0">
                <a href="" class="navbar-brand m-0 p-2 col-lg-6 col-md-7 col-sm-5 col-4 m-lg-0 m-md-0 m-sm-0 m-0 pt-lg-3">
                    <img src="imagenes/logo1inicio.png" alt="Logo" style="width:180px;" class="ms-lg-4 ms-md-4 ms-sm-4 ms-1">
                </a>
                <div class="row col-lg-6 m-0 p-0 col-md-5 col-sm-7 pt-sm-1 col-8 pt-2">
                    <div class="col-lg-4 m-0 p-0 col-md-2 col-sm-2 col-2"></div>
                    <div class="col-lg-3 row m-0 p-0 col-md-4 pt-md-1 col-sm-4 ps-sm-2 col-4">
                        <div class="col-lg-2 m-0 p-0 "></div>
                        <div class="m-0 p-0 col-lg-10 pt-lg-1" id="bt">
                            
                        </div>
                    </div>
                    <div class="col-lg-3 row m-0 p-0 col-md-4 pt-md-1 col-sm-4 ps-sm-2 col-4">
                        <div class="col-lg-2 m-0 p-0"></div>
                        <div class="m-0 p-0 col-lg-10 pt-lg-1" id="bt">
                           
                        </div>
                    </div>
                    <div class="col-lg-2 row m-0 p-0 col-md-2 col-sm-2 col-2 ps-2 pe-2">
                        <div class="col-lg-1 m-0 p-0 d-block"></div>
                    <!-- NAV BUTTON  -->
                        <div class="m-0 p-0 col-lg-10 ps-lg-3 pe-lg-4 pt-lg-3 p-0">
                            <button
                                class="navbar-toggler m-0 p-0"
                                type="button"
                                data-bs-toggle="offcanvas"
                                data-bs-target="#menuLateral"
                            >
                                <img class="m-0 p-0" src="imagenes/icon_menu.png" style="width:100%;">
                            </button>
                        </div>
                        <div class="col-lg-1 m-0 p-0 d-block"></div>
                    </div>
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
    <section class="row m-0">
        <div class="col-lg-5 col-md-4 col-sm-12 p-0" id="imagen">
            <img src="imagenes/fondo_pago.jpg" style="width: 100%;" class="">
        </div>
        <div class="col-lg-7 col-md-8 col-sm-12 row m-0 pt-lg-2 ps-lg-5 pe-lg-5 pb-3" id="dtpago">
            <h2 class="col-lg-12 m-0 col-md-12 col-sm-12 pt-lg-0 pb-lg-0 pt-md-0 pb-md-0 pt-sm-0 pb-sm-0 mt-md-4 mb-md-2 mt-sm-4 mb-sm-2 mt-4 mb-2">PAGO</h2>
            <form action="/" method="post" onsubmit="return validarPago();">
              <div id="tarjeta" class="row col-lg-12 m-0 col-md-12 col-sm-12 col-12 mb-lg-4 mb-md-4 mb-sm-4 mb-4">
                <p class="col-lg-12 m-0 col-md-12 col-sm-12 col-12">Tarjeta</p>
                <div id="formTarjeta" class="row col-lg-12 m-0 pt-lg-2 col-md-12 pt-md-3 pb-md-3 col-sm-12 pt-sm-3 pb-sm-3 col-12 pt-3 pb-3">
                    
                        <div class="row col-lg-12 m-0 pt-0 mt-lg-2 mb-lg-3 col-md-12 mt-md-2 mb-md-3 col-sm-12 mt-sm-2 mb-sm-2 col-12 mt-2 mb-3">
                          <p class="col-lg-4 m-0 p-0 pt-lg-2 pb-lg-2 text-start col-md-4 pt-md-2 pb-md-2 col-sm-3 pt-sm-2 pb-sm-2 col-3" style="height: 100%;">Numero de tarjeta</p>
                          <input type="text" class="col-lg-8 m-0 col-md-8 col-sm-9 col-9" id="numTar" placeholder="" name="numTar">
                        </div>
                        <div class="row col-lg-12 m-0 mt mt-lg-0 mb-lg-3 col-md-12 mt-md-0 mb-md-3 col-sm-12 mt-sm-2 mb-sm-2 col-12 mt-2 mb-3">
                          <p class="col-lg-4 m-0 p-0 pt-lg-2 pb-lg-2 col-md-4 pt-md-2 pb-md-1 col-sm-3 pt-sm-2 pb-sm-2 col-3" style="height: 100%;">Fecha de vencimiento</p>
                          <input type="text" class="col-lg-8 m-0 col-md-8 col-sm-9 col-9" id="fv" placeholder="mm/aa" name="fv">
                        </div>
                        <div class="row col-lg-12 m-0 mt mt-lg-0 mb-lg-3 col-md-12 mt-md-0 mb-md-3 col-sm-12 mt-sm-2 mb-sm-2 col-12 mt-2 mb-3">
                          <p class="col-lg-4 m-0 p-0 pt-lg-2 pb-lg-2 col-md-4 pt-md-2 pb-md-1 col-sm-3 pt-sm-2 pb-sm-2 col-3 pt-2 pb-2" style="height: 100%;">CVV</p>
                          <input type="text" class="col-lg-8 m-0 col-md-8 col-sm-9 col-9" id="cvv" placeholder="" name="cvv">
                        </div>
                        <div class="row col-lg-12 m-0 mt mt-lg-0 mb-lg-3 col-md-12 mt-md-0 mb-md-3 col-sm-12 mt-sm-2 mb-sm-2 col-12 mt-2 mb-3">
                          <p class="col-lg-4 m-0 p-0 pt-lg-2 pb-lg-2 col-md-4 pt-md-2 pb-md-1 col-sm-3 pt-sm-2 pb-sm-2 col-3 pe-4" style="height: 100%;">Tipo de tarjeta</p>
                          <select class="col-lg-8 m-0 col-md-8 col-sm-9 col-9" id="tipo">
                            <datalist class="pt-5 pb-5">
                              <option selected="true" disabled id="default"></option>
                              <option>Credito</option>
                            </datalist>
                          </select>
                        </div>
                        <div class="row col-lg-12 m-0 mt mt-lg-0 mb-lg-3 col-md-12 mt-md-0 mb-md-3 col-sm-12 mt-sm-2 mb-sm-2 col-12 mt-2 mb-3">
                          <p class="col-lg-4 m-0 p-0 pt-lg-2 pb-lg-2 col-md-4 pt-md-2 pb-md-1 col-sm-3 pt-sm-2 pb-sm-2 col-3" style="height: 100%;">Nombre del titular</p>
                          <input type="text" class="col-lg-8 m-0 col-md-8 col-sm-9 col-9" id="titular" placeholder="" name="titular">
                        </div>
                    
                </div>
            </div>
            <div id="direccion" class="row col-lg-12 m-0 col-md-12 col-sm-12 col-12 mb-lg-5 mb-md-5 mb-sm-5 mb-5">
              <p class="col-lg-12 m-0 col-md-12 col-sm-12 col-12">Direccion</p>
              <div id="formDireccion" class="row col-lg-12 m-0 pt-lg-2 col-md-12 pt-md-3 pb-md-3 col-sm-12 pt-sm-3 pb-sm-3 col-12 pt-3 pb-3">
                
                  <div class="row col-lg-6 m-0 pt-0 mt-lg-2 mb-lg-3 col-md-12 mt-md-2 mb-md-3 col-sm-12 mt-sm-2 mb-sm-2 col-12 mt-2 mb-3">
                    <p class="col-lg-3 m-0 p-0 pt-lg-2 pb-lg-2 text-start col-md-4 pt-md-2 pb-md-2 col-sm-3 pt-sm-2 pb-sm-2 col-3 pt-2 pb-2" style="height: 100%;">Ciudad</p>
                    <input type="text" class="col-lg-9 m-0 col-md-8 col-sm-9 col-9" id="cd" placeholder="" name="cd">
                  </div>
                  <div class="row col-lg-6 m-0 pt-0 mt-lg-2 mb-lg-3 col-md-12 mt-md-2 mb-md-3 col-sm-12 mt-sm-2 mb-sm-2 col-12 mt-2 mb-3">
                    <p class="col-lg-3 m-0 p-0 pt-lg-0 pb-lg-0 text-start col-md-4 pt-md-2 pb-md-2 col-sm-3 pt-sm-2 pb-sm-2 col-3 pe-4" style="height: 100%;">Codigo postal</p>
                    <input type="text" class="col-lg-9 m-0 col-md-8 col-sm-9 col-9" id="cp" placeholder="" name="cp">
                  </div>
                  <div class="row col-lg-6 m-0 pt-0 mt-lg-2 mb-lg-3 col-md-12 mt-md-2 mb-md-3 col-sm-12 mt-sm-2 mb-sm-2 col-12 mt-2 mb-3">
                    <p class="col-lg-3 m-0 p-0 pt-lg-2 pb-lg-2 text-start col-md-4 pt-md-2 pb-md-2 col-sm-3 pt-sm-2 pb-sm-2 col-3 pt-2 pb-2" style="height: 100%;">Colonia</p>
                    <input type="text" class="col-lg-9 m-0 col-md-8 col-sm-9 col-9" id="col" placeholder="" name="col">
                  </div>
                  <div class="row col-lg-6 m-0 pt-0 mt-lg-2 mb-lg-3 col-md-12 mt-md-2 mb-md-3 col-sm-12 mt-sm-2 mb-sm-2 col-12 mt-2 mb-3">
                    <p class="col-lg-3 m-0 p-0 pt-lg-2 pb-lg-2 text-start col-md-4 pt-md-2 pb-md-2 col-sm-3 pt-sm-2 pb-sm-2 col-3 pt-2 pb-2" style="height: 100%;">No.Casa</p>
                    <input type="text" class="col-lg-9 m-0 col-md-8 col-sm-9 col-9" id="noCasa" placeholder="" name="noCasa">
                  </div>
                  <div class="row col-lg-12 m-0 mt mt-lg-2 mb-lg-3 col-md-12 mt-md-2 mb-md-3 col-sm-12 mt-sm-2 mb-sm-2 col-12 mt-2 mb-3">
                    <p class="col-lg-2 m-0 p-0 pt-lg-2 pb-lg-2 col-md-4 pt-md-2 pb-md-1 col-sm-3 pt-sm-2 pb-sm-2 col-3 pt-2 pb-2" style="height: 100%;">Referencias</p>
                    <input type="text" class="col-lg-10 m-0 col-md-8 col-sm-9 col-9" id="ref" placeholder="" name="ref">
                  </div>
                
              </div>
            </div>
            <div class="col-lg-12 row">
              <div class="col-lg-3 col-md-3 m-0 col-sm-3 col-3"></div>
              <div class="m-0 p-0 col-lg-3 ps-lg-3 pe-lg-3 pt-lg-1 col-md-3 ps-md-3 pe-md-2 pt-md-1 col-sm-3 ps-sm-3 pe-sm-3 pt-sm-1 col-3 ps-1 pe-1 pt-1" id="bt">
                <button type="reset">
                  <img src="imagenes/boton_cancelarPago.png" alt="Logo" style="width:100%;">
                </button>
              </div>
              <div class="m-0 p-0 col-lg-3 ps-lg-2 pe-lg-3 col-md-3 ps-md-2 pe-md-2 col-sm-3 ps-sm-2 pe-sm-3 col-3" id="bt">
                <button type="submit" class="btn btn-primary" id="sub">
                  <img src="imagenes/boton_pagarPago.png" alt="Logo" style="width:100%;" class="m-0 p-0">
                </button>
              </div>
              <div class="col-lg-3 m-0 col-md-3 col-sm-3 col-3"></div>
            </div>
            </form>
        </div>
    </section>
    <script type="text/javascript" src="validacion pago.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>