@extends('padreAdmi')
@section('contenidoPrincipal')
<section>
        <br><br>
        <div class="container mt-3">
            <h1>Ventas</h1>
            <!--<input id="datepicker" width="150" />-->

            <div class="container p-3" id="main-container">
                <!--CALENDARIO-->


                <!--TABLAAAAAAAA-->

                <div class="table-responsive">
                    <br>
                    <table class="table " >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Fecha</th>
                                <th>Usuario</th>
                                <th class="d-none d-md-table-cell">Dirrección de envio</th>
                                <th>Monto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2023-09-03</td>
                                <td>dvjose06</td>
                                <td class="d-none d-md-table-cell">Calle de la Reforma 269 <br> Balderrame, Hermosillo, Son, C.P.83180</td>
                                <td>1009.80</td>

                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>
    @endsection