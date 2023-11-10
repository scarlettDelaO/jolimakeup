function validarInicio() {
    var correo, pw
    correo = document.getElementById('correo').value
    pw = document.getElementById('contra').value

    if (correo == "" || pw == "") {
        alert("Falta Ingresar Datos");
        return false;

    } else {

        var email = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9,-]+\.[a-zA-Z]{2,}$/;
        if (!email.test(correo)) {
            alert("El Correo Electrónico Esta Mal Escrito.");
            return false;
        }

        if (pw.length !== 8) {
            alert("La Contraseña Esta Mal Escrita.");
            return false;
        }

        return true;
    }

}

function validarRegistro() {
    var nom, correo, tel, pais, dire, pw
    nom = document.getElementById('nombre').value
    correo = document.getElementById('email').value
    tel = document.getElementById('telefono').value
    pais = document.getElementById('pais').value
    dire = document.getElementById('direccion').value
    pw = document.getElementById('contraseña').value

    if (nom == "" || correo == "" || tel == "" || pais == "" || dire == "" || pw == "") {
        alert("Falta Ingresar Datos");
        return false;

    } else {
        var letras = /^[A-Za-z]+$/;
        if (!letras.test(nom)) {
            alert("El Nombre Solo Permite Letras.");
            return false;
        }

        var email = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9,-]+\.[a-zA-Z]{2,}$/;
        if (!email.test(correo)) {
            alert("El Formato Del Correo Electrónico No Es Válido.");
            return false;
        }

        if (!/^\d+$/.test(tel) || telefono.length > 10) {
            alert("El Número De Teléfono Solo Debe Contener Dígitos Numéricos Y No Debe De Pasar De 10 Dígitos.");
            return false;
        }

        const codigosValidos = ['Estados Unidos', 'España', 'México', 'Canada', 'Reino Unido'];


        if (!codigosValidos.includes(codigoPais.toUpperCase())) {
            alert("País No Válido.");
            return false;
        }

        if (dire.trim() === "") {
            alert("Por Favor, Ingrese Una Dirección.");
            return false;
        }


        if (pw.length !== 8) {
            alert("La Contraseña Debe Tener Exactamente 8 Caracteres.");
            return false;
        }

        return true;
    }

}