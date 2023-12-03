document.addEventListener('DOMContentLoaded', (event) => {
    if (document.getElementById('alertAgregar')) {
        document.getElementById('alertAgregar').style.display = 'flex';
    }
});


document.getElementById('botonCerrar').onclick = function() {
    document.getElementById('alertAgregar').style.display = 'none';
    window.location.href = 'productos';
};