





function validar()
{
    var asunto = document.getElementById("asunto").value
    var nombre=document.getElementById("nombre").value;
    var apellido1=document.getElementById("apellido1").value;
    var fechanac = document.getElementById("fechanac").value
    var correo=document.getElementById("correo").value;
    var dni=document.getElementById("dni").value;
    var domicilio =document.getElementById("domicilio").value
    var cp = document.getElementById("cp").value
    var municipio = document.getElementById("municipio").value
    var oficina = document.getElementById("oficina").value
    var info = document.getElementById("info").value
    var telefono = document.getElementById("telefono").value
    var anexo1=document.getElementById("anexo1").value;
    var tamañoanexo1=document.getElementById("anexo1").files[0];
    var tamañoanexo2=document.getElementById("anexo2").files[0];
    var anexo2=document.getElementById("anexo2").value;
    var politica = document.getElementById("politica").Checked

    if(telefono == "")
    {
        document.getElementById("telefonomal").innerHTML="Introduzca su telefono";
     
    }
    else
    {
        document.getElementById("telefonomal").innerHTML="";
       
    }



    if(asunto == "")
    {
        document.getElementById("asuntomal").innerHTML="Introduzca un asunto";
     
    }
    else
    {
        document.getElementById("asuntomal").innerHTML="";
       
    }


    if(nombre == "")
    {
        document.getElementById("nombremal").innerHTML="Introduzca su nombre";
     
    }
    else
    {
        document.getElementById("nombremal").innerHTML="";
       
    }



    if(apellido1 == "")
    {
        document.getElementById("apellidomal1").innerHTML="Introduzca su apellido";
       
    }
    else
    {
        document.getElementById("apellidomal1").innerHTML="";
       
    }


    if(fechanac == "")
    {
        document.getElementById("fechanacmal").innerHTML="Introduzca su fecha";
       
    }
    else
    {
        document.getElementById("fechanacmal").innerHTML="";
       
    }



    if(correo == "")
    {
        document.getElementById("correomal").innerHTML="Introduzca su correo";
      
    }
    else
    {
        var expresionRegular = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (expresionRegular.test(correo)) {
                document.getElementById("correomal").innerHTML=" ";
      
            } else {
                document.getElementById("correomal").innerHTML="Correo electronico no válido";
      
            }
  
    }


   
    if(dni==""){
        document.getElementById("dnimal").innerHTML="Debe introducir un DNI";
  
    }
        else{
            if(dni.length!=9 ){
                document.getElementById("dnimal").innerHTML="Longitud del DNI incorrecta"
             
            }
            else{
                let opciones = ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"];
                let num = parseInt(dni[0]+ dni[1]+ dni[2]+ dni[3]+ dni[4]+ dni[5]+ dni[6]+ dni[7]);
                let letra=num%23;
                if(dni[8]!=opciones[letra]){
                    document.getElementById("dnimal").innerHTML="DNI incorrecto";
              
                }

                else{
                document.getElementById("dnimal").innerHTML="";
               

                }
            }
            
        }


        if(domicilio == "")
        {
            document.getElementById("domiciliomal").innerHTML="Introduzca su domicilio";
         
        }
        else
        {
            document.getElementById("domiciliomal").innerHTML="";
           
        }

        if(cp == "")
        {
            document.getElementById("cpmal").innerHTML="Introduzca su código postal";
         
        }
        else
        {
            document.getElementById("cpmal").innerHTML="";
           
        }

        if(municipio == "")
        {
            document.getElementById("municipiomal").innerHTML="Introduzca su municipio";
         
        }
        else
        {
            document.getElementById("municipiomal").innerHTML="";
           
        }

        if(info == "")
        {
            document.getElementById("infomal").innerHTML="Introduzca su información";
         
        }
        else
        {
            document.getElementById("infomal").innerHTML="";
           
        }

        if(oficina == "")
        {
            document.getElementById("oficinamal").innerHTML="Introduzca su oficina";
         
        }
        else
        {
            document.getElementById("oficinamal").innerHTML="";
           
        }

        if(!politica){
            document.getElementById("politicamal").innerHTML="Debe rellenar este campo";
        }
        else
        {
            document.getElementById("politicamal").innerHTML="";
        }


        if(anexo1==""){
            document.getElementById("anexo1mal").innerHTML="Debe rellenar este campo";
        }
        else if(tamañoanexo1.size>2097152){
            document.getElementById("anexo1mal").innerHTML="Este archivo es demasiado grande";
        }

        if(anexo2==""){
            document.getElementById("anexo2mal").innerHTML="Debe rellenar este campo";
        }
        else if(tamañoanexo2.size>2097152){
            document.getElementById("anexo2mal").innerHTML="Este archivo es demasiado grande";
        }

}