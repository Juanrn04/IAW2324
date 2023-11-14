var inicio= new Date().getTime();
var record

function recordd(){
    if(localStorage.getItem("record")!=undefined){
    record=localStorage.getItem("record");
    document.getElementById("tiempoRecord").innerHTML=record;
    }
}
recordd();



function cambiarColor(){
    let opciones= "0123456789ABCDEF".split("");
    let color="#";
    let i=0
    for(i=0; i<6; i++){
        color += opciones[Math.round(Math.random()*16)];
    }
    return color;
}

function aparecerForma(){
    let top=Math.random()*400;
    let left=Math.random()*400;
    let widht=(Math.random()*300)+50;

    if(Math.random()>0.5){
        document.getElementById("forma").style.borderRadius="50%";
    }
    else{
        document.getElementById("forma").style.borderRadius="0%";
    }

    document.getElementById("forma").style.top = top + "px";
    document.getElementById("forma").style.left = left + "px";

    document.getElementById("forma").style.width = widht + "px";
    document.getElementById("forma").style.height = widht + "px";

    document.getElementById("forma").style.backgroundColor= cambiarColor();
    document.getElementById("forma").style.display="block";

    inicio = new Date().getTime();
}

function aparecerFormaDespuesRetraso(){
    setTimeout(aparecerForma, Math.random()*2000);
}

aparecerFormaDespuesRetraso()

document.getElementById("forma").onclick= function(){
    
    let final= new Date().getTime();
    document.getElementById("forma").style.display="none";
    let diferencia = (final-inicio)/1000;
    document.getElementById("tiempo").innerHTML= diferencia +"s";
    if(record==undefined){
        localStorage.setItem("record", diferencia);
        record= localStorage.getItem("record");
        document.getElementById("tiempoRecord").innerHTML= record;
    }
    else if(diferencia < record){
        localStorage.setItem("record", diferencia);
        record= localStorage.getItem("record");

        document.getElementById("tiempoRecord").innerHTML=record;
    }
    aparecerFormaDespuesRetraso();

};
