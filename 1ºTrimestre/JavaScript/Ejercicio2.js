function euros() 
{
    if(document.getElementById("numero").value < 0)
    {
        document.getElementById("resultado").innerHTML = "Debe introducir un numero válido";
    }
    else
    {
        var cantidad = document.getElementById("numero").value;
        document.getElementById("resultado").innerHTML = "Su valor en euros es: " + cantidad * 0.85 + " €";
    }

}

function dolares() 
{
    if(document.getElementById("numero").value < 0)
    {
        document.getElementById("resultado").innerHTML = "Debe introducir un numero válido";
    }
    else
    {
        var cantidad = document.getElementById("numero").value;
        document.getElementById("resultado").innerHTML = "Su valor en dolares es: " + cantidad * 1.12 + " $";
    }

}