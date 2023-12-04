<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu foto</title>
</head>
<body>

<form  method="post" enctype="multipart/form-data">
    <label for="nombre">Nombre:</label> 
    <input type="text" name="nombre" required><br> <br>

    <label for="imagen">Imagen de perfil:</label>
    <input type="file" name="imagen" required><br><br>

    <input type="submit" value="Crear Perfil">

    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = $_POST["nombre"];

    // Verificar si se subió un archivo y procesarlo
    if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == 0) {
        $nombreArchivo = $_FILES["imagen"]["name"];
        $tipoArchivo = $_FILES["imagen"]["type"];
        $tamañoArchivo = $_FILES["imagen"]["size"];
        $tempArchivo = $_FILES["imagen"]["tmp_name"];

        // Mover el archivo al directorio deseado (en este caso, la misma carpeta que el script)
        $rutaDestino = $nombreArchivo;
        move_uploaded_file($tempArchivo, $rutaDestino);
    } else {
        // Manejar el caso en que no se haya subido una imagen
        echo "Error: Debes subir una imagen.";
        exit;
    }

    // Mostrar la página con la imagen y el nombre
    echo "<!DOCTYPE html>
          <html lang='es'>
          <head>
              <meta charset='UTF-8'>
              <meta name='viewport' content='width=device-width, initial-scale=1.0'>
              <title>Perfil de Usuario</title>
          </head>
          <body>
              <h2>Perfil de Usuario</h2>
              <p>Nombre: $nombre</p>
              <img src='$rutaDestino' alt='Imagen de perfil'>
          </body>
          </html>";
} else {
    echo "Error en el envío del formulario.";
}

?>


</form>
    
</body>
</html>