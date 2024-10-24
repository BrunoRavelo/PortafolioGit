var registro = "<tr><th>Nombre</th><th>Edad</th><th>Correo electrónico</th><th>Deportes de Interés</th><th>Tipo de Membresía</th><th>Fecha de Registro</th><th>Color de Membresía</th></tr>";
var estilo=0;

function Registro() {
    /* Validación de que todos los campos del formulario han sido llenados */
    if (document.getElementById("nombre").value == false) {
        alert("Nombre vacío. Debes llenar todos los campos");
    } else if (document.getElementById("email").value == false) {
        alert("Email vacío. Debes llenar todos los campos");
    }else if(document.querySelectorAll('input[name=deporte]:checked').length==0){
        alert("No se selecciono deporte de interés");
    }else if (document.querySelector('input[name=membresia]:checked')==null){
        alert("No se selecciono membresia");
    }else if(document.getElementById("fecha").value==''){
        alert("No se selecciono fecha de inscripcion");
    }else {
        x = document.getElementById("nombre").value;
        registro = registro + "<td>" + x + "</td>";

        x = document.getElementById("edad").value;
        console.log(x);
        switch (x){
            case "1":
                registro = registro + "<td> Niño </td>";
                break;
            case "2":
                registro = registro + "<td> Adulto </td>";
                break;
            case "3":
                registro = registro + "<td> Tercera edad </td>";       
                break;
        }

        x = document.getElementById("email").value;
        registro = registro + "<td>" + x + "</td>";

        registro = registro + "<td>";
        iterable=document.querySelectorAll('input[name=deporte]:checked'); //regrea un arreglo
        for(i of iterable){
            deporte=i.value;
            console.log(deporte);
            registro = registro + deporte + "<br>"
        }
        registro = registro + "</td>";

        /*membresia*/
        radioseleccionado=document.querySelector('input[name=membresia]:checked');
        registro = registro + "<td>" + radioseleccionado.value + "</td>";
        
        /*Fecha*/
        x = document.getElementById("fecha").value;
        registro = registro + "<td>" + x + "</td>";

        x = document.getElementById("color").value;
        x = document.getElementById("color").value;
        registro = registro + "<td>" + x + " " +`<div style="background-color:${x}; width:20px; height:20px; border:1px solid #000; display:inline-block;"></div>` + "</td>";
        
        registro = registro + "</tr>";
        document.getElementById("tablas").innerHTML = registro;

        /* Limpiar los campos */
        document.getElementById("nombre").value = "";
        document.getElementById("email").value = "";
        document.getElementById("Natacion").checked = false;
        document.getElementById("Soccer").checked = false;
        document.getElementById("Ciclismo").checked = false;
        document.getElementById("Matutina").checked = false;
        document.getElementById("Vespertina").checked = false;
        document.getElementById("Todo").value = false;
        document.getElementById("fecha").value = '';
        document.getElementById("edad").value = 1;
        document.getElementById("color").value = '#000000';
    }
}