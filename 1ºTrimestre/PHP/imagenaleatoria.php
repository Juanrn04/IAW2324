<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagen aleatoria</title>
</head>
<body>
<?php

$imagenes = [
    'ruta/imagen1.jpg',
    'ruta/imagen2.jpg',
    'ruta/imagen3.jpg',
];

$imagenAleatoria = $imagenes[array_rand($imagenes)];

echo "<img src='$imagenAleatoria' alt='Imagen aleatoria'>";

?>

</body>
</html>