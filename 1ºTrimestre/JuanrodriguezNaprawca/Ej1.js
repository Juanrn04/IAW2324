let posts = ["Primer Tweet", "Segundo tweet", "Tercer tweet", "Cuarto tweet"];
    imprimePosts();
    function anadir()
    {
     var mensaje = document.getElementById("post").value;
     posts.push(mensaje);
     imprimePosts();
     localStorage.setItem(mensaje);
    }
    function eliminar(elemento) {
     let pos = posts.indexOf(elemento);
     posts.splice(pos,1);
     imprimePosts();
    }
   
    function imprimePosts(){
        let longitud=posts.length;
        let i=0, codigoHTML="";
        let icono="<div class='tweet'><img src='Imagenes/Logo_Twitter.png'>";
        for (i=0;i<longitud;i++){
            codigoHTML+=icono+posts[i]+" <button class=\"btn-image\" onclick='eliminar(posts["+i+"]);''></button><br></div>";
        }
        document.getElementById("demo").innerHTML=codigoHTML;

    }

