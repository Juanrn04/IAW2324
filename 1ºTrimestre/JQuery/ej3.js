

$(document).ready(function () {
    var tamaño= 16;
    $("#aumentar").click(function() { 
        tamaño = tamaño + 1;
        $(".pares").css({
            "font-size":tamaño ,
            "color":"green"});

        
        
    });

    $("#disminuir").click(function() { 
        tamaño = tamaño - 1;
        $(".pares").css({
        "font-size":tamaño ,
        "color":"red"});
    });
});


