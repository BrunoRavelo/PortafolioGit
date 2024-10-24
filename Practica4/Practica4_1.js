function calificacion(){
    var valor=document.getElementById("calificacion").value;
    var calificacion = parseFloat(valor);
    console.log(calificacion);
    if (calificacion < 0 || calificacion > 10) {
        resultado = 'No es calificación';
    } else if (calificacion === 10) {
        resultado = 'LAP';
    } else if (calificacion >= 9) {
        resultado = 'MB';
    } else if (calificacion >= 7.5) {
        resultado = 'B';
    } else if (calificacion >= 6) {
        resultado = 'S';
    } else {
        resultado = 'NA';
    }
    document.getElementById("resultado").innerHTML=resultado;
}