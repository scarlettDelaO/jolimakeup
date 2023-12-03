function mostrarAlertaEliminar() {
    document.getElementById('alertEli').style.display = 'flex';
}

function ocultarAlertaEliminar() {
    document.getElementById('alertEli').style.display = 'none';
}

function confirmarEliminar() {
    console.log('Producto eliminado');

    ocultarAlertaEliminar();
}