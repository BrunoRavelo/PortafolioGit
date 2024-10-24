function registrar(){
    var x = "Datos de registro: \n"
    x+="<br>Nombre: "+ document.getElementById("nombre").value;
    x+="<br>Correo: " + document.getElementById("correo").value;
    x+= "<br>Edad: " + document.getElementById("edad").value + " años";
    
    
    if(document.getElementById("hombre").checked){
        x+="<br>Género: hombre";
    }else if(document.getElementById("mujer").checked){
        x+="<br>Género: mujer";
    }else if(document.getElementById("otro").checked){
        x+="<br>Género no especificado";
    }
    x+= "<br>Fecha de nacimiento " +document.getElementById("nacimiento").value;
    x+= "<br>Color favorito en codigo hexadecimal: " +document.getElementById("color").value;
    
    

    document.getElementById("resultado").innerHTML=x;
}