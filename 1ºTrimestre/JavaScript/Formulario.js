
var dato1 = 0;
var dato2 = 0;
var dato3 = 0;
var dato4 = 0;
var dato5 = 0;
var dato6 = 0;




function validar()
{

    var nombre=document.getElementById("nombre").value;
    var apellido=document.getElementById("apellido").value;
    var correo=document.getElementById("correo").value;
    var dni=document.getElementById("dni").value;
    var pin=document.getElementById("pin").value;
    var pinrepe=document.getElementById("pinrepe").value;


    function perfil(){
        if(dato1==1 && dato2==1 && dato3==1 &&  dato4==1 && dato5==1 && dato6==1)
        {
        let Usuario = nombre[0]+nombre[1]+apellido[0]+apellido[1]+document.getElementById("telefono").value[document.getElementById("telefono").value.length-3]+document.getElementById("telefono").value[document.getElementById("telefono").value.length-2]+document.getElementById("telefono").value[document.getElementById("telefono").value.length-1];
              document.getElementById("resultado").innerHTML = "Su usuario es "+ Usuario;
        }
        else
        {
            document.getElementById("resultado").innerHTML = "";
        }
     }



    if(nombre == "")
    {
        document.getElementById("nombremal").innerHTML="Introduzca su nombre";
        dato1 = 0;
    }
    else
    {
        document.getElementById("nombremal").innerHTML="";
        dato1 = 1;
    }



    if(apellido == "")
    {
        document.getElementById("apellidomal").innerHTML="Introduzca su apellido";
        dato2 = 0;
    }
    else
    {
        document.getElementById("apellidomal").innerHTML="";
        dato2 = 1;
    }



    if(correo == "")
    {
        document.getElementById("correomal").innerHTML="Introduzca su correo";
        dato3 = 0;
    }
    else
    {
        document.getElementById("correomal").innerHTML="";
        dato3 = 1;
    }


   
    if(dni==""){
        document.getElementById("dnimal").innerHTML="Debe introducir un DNI";
        dato4=0;
    }
        else{
            if(dni.length!=9 ){
                document.getElementById("dnimal").innerHTML="Longitud del DNI incorrecta"
                dato4=0;
            }
            else{
                let opciones = ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"];
                let num = parseInt(dni[0]+ dni[1]+ dni[2]+ dni[3]+ dni[4]+ dni[5]+ dni[6]+ dni[7]);
                let letra=num%23;
                if(dni[8]!=opciones[letra]){
                    document.getElementById("dnimal").innerHTML="DNI incorrecto";
                    dato4=0;
                }

                else{
                document.getElementById("dnimal").innerHTML="";
                dato4=1;

                }
            }
            
        }



    
    if(pin == "")
    {
        document.getElementById("pinmal").innerHTML="Introduzca el pin";
        dato5 = 0;
    }
    else
    {
        document.getElementById("pinmal").innerHTML="";
        dato5 = 1;
    }



    if(pinrepe == "")
    {

        document.getElementById("pinrepemal").innerHTML="Rellene este campo";
        dato6=0;
    }

    else if (pin==pinrepe)
    {

        document.getElementById("pinrepemal").innerHTML="";
        dato6=1;
    }

    else if (pin!=pinrepe)
    {

        document.getElementById("pinrepemal").innerHTML="Introduzca el mimsmo PIN";
        dato6=0;
     

    }



        perfil()



}