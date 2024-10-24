function factorial() {
    var valor = document.getElementById("numero").value;
    var num = parseInt(valor);
    var calculo =+factorial_calculo(num);
    console.log(calculo);
    if (calculo===0){
        document.getElementById("resultado").innerHTML = 'El factorial no está definido';
    }else{
        document.getElementById("resultado").innerHTML = 'El factorial es: ' + calculo;
    }
    
}

function factorial_calculo(num) {
    console.log(num);
    if (num < 0) {
        return 0;
    } else if (num === 0) {
        return 1;
    } else {
        return num * factorial_calculo(num - 1);
    }
}

