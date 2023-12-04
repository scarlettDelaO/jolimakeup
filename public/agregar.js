// agregar.js
document.addEventListener('DOMContentLoaded', (event) => {
    // No muestres la alerta al cargar la página
});

function agregarProducto() {
    // Lógica para agregar el producto...
    // Después de agregar el producto, muestra la alerta
    document.getElementById('alertAgregar').style.display = 'flex';
}

document.getElementById('botonCerrar').onclick = function() {
    document.getElementById('alertAgregar').style.display = 'none';
    // Redirige a 'productos' después de cerrar la alerta, si es necesario
    // window.location.href = 'productos';
};