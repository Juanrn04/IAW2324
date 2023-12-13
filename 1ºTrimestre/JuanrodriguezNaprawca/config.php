<?php

    $usuario = htmlspecialchars($_POST['usuario']);
    $contrasena = htmlspecialchars($_POST['contrasena']);

    if ($usuario === 'Juan' && $contrasena === 'Juan04') {
      echo "<h2>Acceso concedido $usuario </h2>";
    } else {
      echo "<h2>Acceso denegado</h2>";
    }
   ?>