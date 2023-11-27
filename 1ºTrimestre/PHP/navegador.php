<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navegador</title>
</head>
<body>
<?php

$navegador = $_SERVER['HTTP_USER_AGENT'];

echo "Tu navegador es: $navegador";


?>
    
</body>
</html>