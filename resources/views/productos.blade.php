@extends('padreAdmi')
@section('contenidoPrincipal')
<section>
        <br><br>
        <div class="container mt-3">
            <h1>Productos</h1>
            <div class="container p-3" id="main-container">
                <div style="border-bottom: 1px solid black;">
                    <div class="d-flex justify-content-between align-items-center mb-3">

                        <a href="agregar">
                        <button id="btnAgregar" type="button" class="btn btn-primary">
                            <img src="imagenes/agregar.png" alt="Agregar">
                        </button>

                        </a>
                        <form class="d-flex" id="search-form">
                            <input class="form-control me-2" type="text" placeholder="Buscar" id="buscar">
                            <button id="btnBuscar" class="btn btn-primary" type="button">
                                <img src="imagenes/buscar.png" alt="Buscar">
                            </button>
                        </form>

                    </div>
                </div>

                <div class="table-responsive">
                    <br>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th class="d-none d-md-table-cell">Descripción</th>
                                <th>Categoria</th>
                                <th>Precio</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Delineador glitter de ojos líquido</td>
                                <td class="d-none d-md-table-cell">Color: Dorado <br> Marca: Avierll <br> Textura: Gel <br> Contenido: 0.07 oz</td>
                                <td>Ojos</td>
                                <td>59.80</td>
                                <td>
                                    <a href="modificar">
                                        <img src="imagenes/editar.png" style="height: 30px;" id="edit">
                                    </a>
                                </td>
                                <td>
                                <button style="height: 30px; background: none; border: none; padding: 0;">
                                    <img src="imagenes/eliminar.png" id="delete">
                                </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

       
    </section>

    
@endsection