@extends('padreN')
@section('contenidoPrincipal')
    <section id="sectionCarrito" class="row col-lg-12 m-lg-0 m-md-0 m-sm-0 m-0">
        <h2 class="col-lg-12 pt-lg-5 pb-lg-5 col-md-12 pt-md-5 pb-md-5 col-sm-12 pt-sm-5 pb-sm-5 col-12 pt-5 pb-4">CARRITO</h2>
        <div class="col-lg-1 col-md-1 col-sm-1 d-block"></div>
        <div class="row col-lg-10 col-md-10 col-sm-10 col-11 text-center m-lg-0 p-lg-0 m-md-0 p-md-0 m-sm-0 p-sm-0 table-container m-3 p-0 ps-2">
            <table class="table table-responsive" id="car">
                <thead>
                    <tr class="row m-0">
                        <th class="col-lg-2 col-md-2 col-sm-3 col-3">Productos</th>
                        <th class="col-lg-5 col-md-4 col-sm-4 col-4"></th>
                        <th class="col-lg-3 col-md-4 col-sm-3 col-3">Cantidad</th>
                        <th class="col-lg-2 col-md-2 col-sm-2 col-2 m-0 ps-0">Precio U</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="row m-0">
                        <td class="col-lg-2 p-lg-3 pt-lg-3 pb-lg-4 col-md-2 pt-md-4 pb-md-3 col-sm-3 pt-sm-2 pb-sm-2 col-3 pt-4"><img src="imagenes/delineador_a1.jpg" style="width: 100%;" class="mt-lg-3 m-sm-0"></td>
                        <td class="col-lg-5 text-start pt-lg-3 ps-lg-5 col-md-4 col-sm-4 col-4">
                            <div class="pt-lg-4 pt-sm-2" id="descrip">
                                <b>Delineador glitter de ojos liquido</b><br>
                                Color: Dorado<br>
                                Marca: Avierll<br>
                                Textura: Gel<br>
                            </div>
                        </td>
                        <td class="col-lg-3 m-0 p-0 col-md-4 p-md-0 m-md-0 col-sm-3 p-sm-0 m-sm-0 col-3 pt-2">
                            <div class="row col-lg-12 pt-lg-5 ps-lg-2 pe-lg-2 mt-lg-2 col-md-12 pt-md-4 m-md-0 m-sm-0 col-sm-12 pt-sm-4 ps-sm-2 pe-sm-2 col-12 m-0 p-0 ps-1 pe-1">
                                <div class="col-lg-2 m-0 col-md-2 d-sm-block mt-sm-2 mt-4"></div>
                                <button id="less" class="col-lg-2 m-0 col-md-2 col-sm-3 col-4" ><img src="imagenes/icon_less.png" style="width: 100%;"></button>
                                <input id="input" value="1" class="col-lg-4 col-md-4 col-sm-6 col-4 text-center pt-lg-0 m-0 m-sm-0 p-sm-0 p-0">
                                <button id="plus" class="col-lg-2 col-md-2 m-0 col-sm-3 m-sm-0 col-4" ><img src="imagenes/icon_plus.png" style="width: 100%;"></button>
                                <div class="col-lg-2 m-0 col-md-2 d-sm-block"></div>
                            </div>
                            <div class="row col-lg-12 pt-lg-3 ps-lg-2 pe-lg-2 m-md-0 col-md-12 pt-md-3 col-sm-12 m-sm-0 mt-sm-2 col-12 m-0 mt-2">
                                <div class="col-lg-4 col-md-5 col-sm-4 col-2"></div>
                                <div class="col-lg-4 ps-lg-4 pe-lg-4 col-md-2 p-md-0 col-sm-4 p-sm-0 col-6 p-0 m-0 ps-1 pe-1 pt-1">
                                    <button id="quitar" class="ps-lg-0 pe-lg-0 ps-sm-2 pe-sm-2 ps-2 pe-2" ><img src="imagenes/icon_trash.png" style="width: 90%;"></button>
                                </div>
                                <div class="col-lg-4 m-0 col-md-5 col-sm-4 col-1"></div>
                            </div>
                        </td>
                        <td class="col-lg-2 m-0 pt-lg-4 pb-lg-4 col-md-2 col-sm-2 col-2">
                            <div class="row pt-lg-5 pb-lg-5 m-0 pt-md-4 pb-md-4 pt-sm-5 pb-sm-5 pt-5 pb-5">
                            <input id="pu" value="$300" class="col-lg-12 text-center pt-lg-0 m-0 mt-md-3 p-0 col-12" disabled>
                            </div>
                        </td>
                    </tr>
                    <tr style="height: 40px;"></tr>
                    <tr class="row m-0" id="tot">
                        <th class="col-lg-2 m-lg-0 p-lg-3 col-md-2 col-sm-3 pt-sm-3 col-3 p-2">Total</th>
                        <th class="col-lg-8 m-lg-0 col-md-8 col-sm-6 col-6"></th>
                        <th class="col-lg-2 m-lg-0 p-lg-2 col-md-2 col-sm-3 col-3">
                            <div class="row m-lg-0 p-lg-0 col-lg-12">
                                <input id="pu" value="$300" class="text-center m-lg-0 col-lg-12" disabled>
                            </div>
                        </th>
                    </tr>
                </tbody>
            </table>

            <div class="col-lg-12 mt-lg-5 mb-5 col-md-12 mt-md-5 mb-md-5 col-sm-12 mt-sm-5 mb-sm-5 col-12 mt-5 mb-5">
                <button id="less" class="col-lg-2 mt-lg-2 mb-lg-2  col-md-2 col-sm-3 col-4" ><img src="imagenes/boton_pagar.png" style="width: 100%;"></button>
            </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 d-block"></div>
        
    </section>
    <script type="text/javascript" src="funcion carrito.js"></script>
@endsection