<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emoticono</title>
</head>
<body>
<?php

$unicodeCode = rand(128512, 128586);

$emoticono = mb_convert_encoding("&#$unicodeCode;", 'UTF-8', 'HTML-ENTITIES');

echo "<p style='font-size: 30px;'>$emoticono</p>";

?>
    
</body>
</html>