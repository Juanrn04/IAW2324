<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<form method="post">
    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="usuario" required>

    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" required>

    <button type="submit">Iniciar Sesión</button>
  </form>

  <?php

    // Verificar si se han enviado datos de usuario y contraseña
 /* if(isset($_POST['usuario']) && isset($_POST['contrasena'])) { */
    // Obtener los datos del formulario y aplicar htmlspecialchars para convertirlos en caracteres html
    $usuario = htmlspecialchars($_POST['usuario']);
    $contrasena = htmlspecialchars($_POST['contrasena']);
    // Verificar las credenciales
    if ($usuario === 'admin' && $contrasena === 'H4CK3R4$1R') {
      echo "<h2>Acceso concedido</h2>";
    } else {
      echo "<h2>Acceso denegado</h2>";
    }
  /* }  else {
    // Si no se han enviado datos, mostrar un mensaje de error
    echo "<h2>Error: Por favor, introduce usuario y contraseña.</h2>";
  } */

   ?>
</body>
</html>