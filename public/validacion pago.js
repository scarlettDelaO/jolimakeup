function validarPago(){
    var nTar,fVen,cvv,tipTar,tit,cd,cp,col,nCasa,ref;
    nTar = document.getElementById('numTar').value;
    fVen = document.getElementById('fv').value;
    cvv = document.getElementById('cvv').value;
    tipTar = document.getElementById('tipo').value;
    tit = document.getElementById('titular').value;
    cd = document.getElementById('cd').value;
    cp = document.getElementById('cp').value;
    col = document.getElementById('col').value;
    nCasa = document.getElementById('noCasa').value;
    ref = document.getElementById('ref').value;

    

    if (nTar=="" || fVen=="" || cvv=="" || tipTar=="" || tit=="" || cd=="" || cp=="" || col=="" || nCasa=="" || ref==""){
        alert("Falta ingresar datos");
        return false;
    }else{
        if (nTar.legth < 13 || nTar.length > 16){
            alert("Numero de tarjeta invalido");
            return false;
        }

        if (nTar.legth < 13 || nTar.length > 16){
            alert("Numero de tarjeta invalido");
            return false;
        }
        
        var vD = /^(0[1-9]|1[0-2])\/\d{2}$/;
        if(vD.test(fv)){
            alert("Fecha de validacion incorrecta");
            return false;
        }
        
        var vCVV=/^\d{4}$/;
        if(!vCVV.test(cvv)){
            alert("CVV invalido");
            return false;
        }
    
        var letras = /^[A-Za-z]+$/;
        if(!letras.test(tit)){
            alert("Campo titular solo permite letras");
            return false;
        }
    
        var vcp=/^\d{5}$/;
        if(!vcp.test(cp)){
            alert("Codigo postal invalido");
            return false;
        }
    
        if(!letras.test(cd)){
            alert("El campo ciudad solo permite letras");
            return false;
        }
    
        if(!letras.test(col)){
            alert("El campo colonia solo permite letras");
            return false;
        }
        
        var vnC=/^\d+$/
        if(!vnC.test(nCasa)){
            alert("Numero de casa invalido");
            return false;
        }
        alert("El pago fue realizado con exito");
        return true
        
    }
}