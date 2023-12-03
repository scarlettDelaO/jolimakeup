document.addEventListener('DOMContentLoaded', (event) => {
    if (document.getElementById('alertModificar')) {
        document.getElementById('alertModificar').style.display = 'flex';
    }
});


document.getElementById('botonCerrar').onclick = function() {
    document.getElementById('alertModificar').style.display = 'none';
    window.location.href = 'productos';
};