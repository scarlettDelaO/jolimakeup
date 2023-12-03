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
                    @foreach($products as $product)
                    <tbody>
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td class="d-none d-md-table-cell">Color: {{$product->color}} <br> Marca: {{$product->brand}} <br> Textura: {{$product->texture}} <br> Contenido: {{$product->content}}</td>
                            <td>{{$product->category->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>
                            <a href="{{ route('modificar', $products->id) }}">
                                <img src="imagenes/editar.png" style="height: 30px;" alt="Editar">
                            </a>
                            </td>
                            <td>
                                <button style="height: 30px; background: none; border: none; padding: 0;" onclick="mostrarAlertaEliminar()">
                                    <img src="imagenes/eliminar.png" alt="Eliminar">
                                </button>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <!-- Alerta Eliminar -->
    <div id="alertEli" class="alerta-oculta" style="display: none;">
        <div class="alerta-contenido">
            <p>¿Seguro desea borrar el producto?</p>
            <p>¡Cuidado! El producto se borrará permanentemente.</p>
            <button id="botonConfirmar" onclick="confirmarEliminar()">
                <img src="imagenes/confirmar.png" alt="Confirmar">
            </button>
            <button id="botonCancelar" onclick="ocultarAlertaEliminar()">
                <img src="imagenes/boton_cancelar.png" alt="Cancelar">
            </button>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    function mostrarAlertaEliminar() {
        document.getElementById('alertEli').style.display = 'flex';
    }

    function ocultarAlertaEliminar() {
        document.getElementById('alertEli').style.display = 'none';
    }

    function confirmarEliminar() {
        // Aquí puedes agregar la lógica para eliminar el producto.
        // Por ejemplo, hacer una solicitud AJAX o redirigir a una ruta de Laravel.
        console.log('Producto eliminado');
        ocultarAlertaEliminar();
    }
</script>
@endpush
