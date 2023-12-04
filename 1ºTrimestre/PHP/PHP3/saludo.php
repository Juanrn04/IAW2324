<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>
<body>

    <form method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <button type="submit">Enviar</button>
  </form>
  <?php
  // Verificar si se ha enviado un nombre
  if(isset($_POST['nombre'])) {
    // Obtener el nombre desde el formulario
    $nombre = htmlspecialchars($_POST['nombre']);

    // Obtener la fecha actual
    $fecha = date('d/m/y');

    // Construir el mensaje de saludo
    $saludo = "Hola $nombre hoy es $fecha";

    // Mostrar el resultado en la página
    echo "<h2>$saludo</h2>";
  } else {
    // Si no se ha enviado un nombre, mostrar un mensaje de error
    echo "<h2>Error: Por favor, introduce tu nombre.</h2>";
  }
?>
</body>
</html>