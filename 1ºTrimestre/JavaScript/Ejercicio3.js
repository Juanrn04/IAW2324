function calculo(){
    var num = document.getElementById("numdni").value;
    if (num > 0 & num < 9999999 || num > 99999999)
    {
        document.getElementById("demo").innerHTML = "Debes escribir un numero 8 digitos";
    }
    else
    {
        var letras = ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"];
        var num = document.getElementById("numdni").value;
        var resto = num % 23;
        document.getElementById("demo").innerHTML = num + letras[resto];
    }
    }
