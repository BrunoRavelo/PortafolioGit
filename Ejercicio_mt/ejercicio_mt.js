// Función para añadir tarea
function tarea() {
    var tareanueva = document.getElementById('tareanueva').value;
    var descripcion = document.getElementById('descripcion').value;
    
    if (tareanueva === '') {
        alert("Ingrese Nombre de tarea");
    }else if(descripcion===''){
        alert("ingrese descripcion de tarea");
    }else{
      var tabla = document.getElementById('tabla');
      
      var newRow = `
        <tr>
          <td><input type="checkbox" onclick="toggleComplete(this)"></td>
          <td>${tareanueva}:<br><small>${descripcion}</small></td>
        </tr>
      `;
      
      tabla.innerHTML += newRow;
  
      // Limpiar los inputs
      tareanueva.value = '';
      descripcion.value = '';
    }
  }
  
  // Función para borrar toda la lista
function borrarlista() {
    var tabla = document.getElementById('tabla');
    tabla.innerHTML = ''; 
}

  // Función para marcar tarea como completada
function toggleComplete(checkbox) {
    var row = checkbox.parentElement.parentElement;
    
    if (checkbox.checked) {
      row.classList.add('completed');
    } else {
      row.classList.remove('completed');
    }
}
function borracompletos() {
    var tabla = document.getElementById('tabla');
    var rows = tabla.getElementsByTagName('tr');
    
    // Recorrer las filas de la tabla desde el final hacia el inicio
    for (let i = rows.length - 1; i >= 0; i--) {
      var checkbox = rows[i].getElementsByTagName('input')[0];
      if (checkbox && checkbox.checked) {
        tabla.deleteRow(i); 
      }
    }
  }