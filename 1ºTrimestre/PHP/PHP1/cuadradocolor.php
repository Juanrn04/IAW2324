<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadrado de colo aleatorio</title>
</head>
<body>
<?php

$rojo = rand(0, 255);
$verde = rand(0, 255);
$azul = rand(0, 255);

// Crear el estilo en línea con el color aleatorio
$estilo = "width: 300px; height: 300px; background-color: rgb($rojo, $verde, $azul);";

// Imprimir la caja con el color aleatorio
echo "<div style='$estilo'></div>";
?>
</body>
</html>