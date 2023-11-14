function calculo()
{
    if(document.getElementById("altura").value <= 0 || document.getElementById("peso").value <= 0)
    {
        document.getElementById("resultado").innerHTML = "Debe introducir valores válidos";
    }
    else
    {
        var valor = document.getElementById("peso").value / (document.getElementById("altura").value/100 * document.getElementById("altura").value/100);
    
        if(valor <= 18.5)
        {
            document.getElementById("resultado").innerHTML = "Su resultado es: " + valor + " su peso es inferior a lo normal"
        }
        else if(valor >= 18.8 & valor <= 24.9)
        {
            document.getElementById("resultado").innerHTML = "Su resultado es: " + valor + " su peso es normal"
        }
        else if(valor >= 25 & valor <= 29.9)
        {
            document.getElementById("resultado").innerHTML = "Su resultado es: " + valor + " su peso es superior a lo normal"
        }
        else if(valor >= 30)
        {
            document.getElementById("resultado").innerHTML = "Su resultado es: " + valor + " usted tiene obesidad"
        }
    }

}