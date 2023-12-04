function mostrarAlertaCerrarSesion() {
    document.getElementById('alertCerrarSesion').style.display = 'flex';
}

function ocultarAlertaCerrarSesion() {
    document.getElementById('alertCerrarSesion').style.display = 'none';
}

document.getElementById('botonConfirmar').addEventListener('click', function() {
    window.location.href = 'principal';
});