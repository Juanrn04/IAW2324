<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores cadena</title>
</head>
<body>
<?php

$cadena1 = "Hola";
$cadena2 = "Mundo";

$concatenacion = $cadena1 . " " . $cadena2;
echo "Concatenación: $concatenacion<br>";

$cadena1 .= " PHP";
echo "Concatenación con asignación: $cadena1<br>";

$longitud = strlen($concatenacion);
echo "Longitud de la cadena: $longitud<br>";

$mayusculas = strtoupper($concatenacion);
echo "Mayúsculas: $mayusculas<br>";

$minusculas = strtolower($concatenacion);
echo "Minúsculas: $minusculas<br>";

?>
</body>
</html>