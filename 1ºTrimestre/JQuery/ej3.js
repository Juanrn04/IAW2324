

$(document).ready(function () {
    var tamaño = 10;
    $("#aumentar").click(function() { 
        tamaño = tamaño + 10;
        $(".pares").css("font-size",tamaño);
        
    });

    $("#disminuir").click(function() { 
        tamaño = tamaño - 10;
        $(".pares").css("font-size",tamaño);
    });
});


