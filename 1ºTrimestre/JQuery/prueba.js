

$(document).ready(function () {

    $("#esconder").click(function () { 
        var entrada = prompt("Por favor, cual quieres esconder:");

        if(entrada=="todos")
        {
            $("p").hide();
        }
        else
        {
            $("#" + entrada).hide();
        }

        
        
    });
    $("#mostrar").click(function () { 
        var variable = prompt("Por favor, cual quieres mostrar:");

        if(variable=="todos")
        {
            $("p").show();
        }
        else
        {
            $("#" + variable).show();
        }
        
        
    });

    $("#alternar").click(function () { 
     alert($("#campo").val("hola"));
        
    });



});