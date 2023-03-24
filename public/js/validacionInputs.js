function vaciosLogin(){

    var usuario = document.getElementById("txtUsuario").value;
    var contra = document.getElementById("txtPass").value;

    if(usuario == ""){
        alert("El campo usuario esta vacio");
        return false;
    }

    if(contra == ""){
        alert("El campo contraseña esta vacio");
        return false;
    }
}

function vaciosAdmin(){

    var nombre = document.getElementById("txtNombre").value;
    var aPat = document.getElementById("txtApat").value;
    var aMat = document.getElementById("txtAmat").value;
    var tel = document.getElementById("txtTel").value;
    var correo = document.getElementById("txtCorreo").value;
    var contra = document.getElementById("txtContra").value;
    var admin = document.getElementById("txtAdmin").value;

    var domicilio = document.getElementById("txtDom").value;
    var confContra = document.getElementById("ConfContra").value;

    if(nombre == ""){
        alert("El campo nombre esta vacio");
        return false;
    }

    if(aPat == ""){
        alert("El campo apellido paterno esta vacio");
        return false;
    }

    if(aMat == ""){
        alert("El campo apellido materno esta vacio");
        return false;
    }

    if(tel == ""){
        alert("El campo telefono esta vacio");
        return false;
    }

    if(correo == ""){
        alert("El campo correo esta vacio");
        return false;
    }

    if(contra == ""){
        alert("El campo contraseña esta vacio");
        return false;
    }

    if(admin == ""){
        alert("El campo administrador esta vacio");
        return false;
    }

    if(domicilio == ""){
        alert("El campo domicilio esta vacio");
        return false;
    }

    if(confContra == ""){
        alert("Vuelva a escribir la contraseña");
        return false;
    }
}

function vaciosSucu(){

    var nombre = document.getElementById("txtNomS").value;
    var dire = document.getElementById("txtDirS").value;
    var tam = document.getElementById("txtTam").value;
    var pag = document.getElementById("txtPag").value;
    var tel = document.getElementById("txtTelS").value;
    var idAd = document.getElementById("txtidAdmin").value;

    if(nombre == ""){
        alert("El campo nombre esta vacio");
        return false;
    }

    if(dire == ""){
        alert("El campo dirección esta vacio");
        return false;
    }

    if(tam == ""){
        alert("El campo tamaño esta vacio");
        return false;
    }

    if(pag == ""){
        alert("El campo pagina esta vacio");
        return false;
    }

    if(tel == ""){
        alert("El campo telefono esta vacio");
        return false;
    }

    if(idAd == ""){
        alert("El campo Id Administrador esta vacio");
        return false;
    }
}

function vaciosProve(){

    var nombre = document.getElementById("txtNom").value;
    var aPat = document.getElementById("txtApat").value;
    var aMat = document.getElementById("txtAmat").value;
    var tel = document.getElementById("txtTel").value;
    var correo = document.getElementById("txtCorreo").value;
    var idSuc = document.getElementById("txtidSuc").value;

    if(nombre == ""){
        alert("El campo nombre esta vacio");
        return false;
    }

    if(aPat == ""){
        alert("El campo apellido paterno esta vacio");
        return false;
    }

    if(aMat == ""){
        alert("El campo apellido Materno esta vacio");
        return false;
    }

    if(tel == ""){
        alert("El campo telefono esta vacio");
        return false;
    }

    if(correo == ""){
        alert("El campo correo esta vacio");
        return false;
    }

    if(idSuc == ""){
        alert("El campo Id Sucursal esta vacio");
        return false;
    }
}

function vaciosProduc(){

    var nombre = document.getElementById("txtNom").value;
    var cat = document.getElementById("txtCat").value;
    var desc = document.getElementById("txtDesc").value;
    var dimen = document.getElementById("txtDimen").value;
    var precio = document.getElementById("txtPrecio").value;
    var idProv = document.getElementById("txtidProv").value;

    if(nombre == ""){
        alert("El campo nombre esta vacio");
        return false;
    }

    if(cat == ""){
        alert("El campo categoría esta vacio");
        return false;
    }

    if(desc == ""){
        alert("El campo descuento esta vacio");
        return false;
    }

    if(dimen == ""){
        alert("El campo dimensión esta vacio");
        return false;
    }

    if(precio == ""){
        alert("El campo precio esta vacio");
        return false;
    }

    if(idProv == ""){
        alert("El campo Id Proveedor esta vacio");
        return false;
    }
}