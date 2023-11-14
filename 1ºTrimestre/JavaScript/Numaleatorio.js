var numaleatorio = Math.floor(Math.random() * 5);

function adivinar()
{
   
    var numero1 = document.getElementById("numero").value;
    if(numero1 == "" || numero1 < 0 || numero1 > 5 )
    {
        document.getElementById("resultado").innerHTML="Introduce un número o que sea válido"
    }
    else
    {
        if(numaleatorio != numero1)
        {
            document.getElementById("resultado").innerHTML="Casi, vuelve a intentarlo"
        }
        else
        {
            document.getElementById("resultado").innerHTML="¡Muy bieen!"
        }
    }
}

function otro()
{
    document.getElementById("numero").value = "";
    numaleatorio = Math.floor(Math.random() * 5);
    var numero1 = document.getElementById("numero").value;
    if(numero1 == "")
    {
        document.getElementById("resultado").innerHTML="Introduce otro número"
    }
    else
    {
        if(numaleatorio != numero1)
        {
            document.getElementById("resultado").innerHTML="Casi, vuelve a intentarlo"
        }
        else
        {
            document.getElementById("resultado").innerHTML="¡Muy bieen!"
        }
    }

}