

$(document).ready(function () {
    var tamaño=20;
    $("#aumentar").click(function() { 
        tamaño = tamaño + 1;
        $(".pares").css("font-size",tamaño);
        
    });

    $("#disminuir").click(function() { 
        tamaño = tamaño - 1;
        $(".pares").css("font-size",tamaño);
    });
});


