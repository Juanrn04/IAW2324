<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web scrapping</title>
</head>
<body>
<form method="post">
        <label for="url">URL:</label>
        <input type="text" id="url" name="url" required>
        <button type="submit">Obtener Correos</button>
    </form>

    <?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url = isset($_POST['url']) ? $_POST['url'] : '';

   
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        // Descargar el código fuente HTML de la URL
        $contenido = file_get_contents($url);

        if ($contenido === false) {
            echo 'Error al leer el contenido remoto.';
        } else {
            // Utilizar expresiones regulares para extraer direcciones de correo electrónico
            $patron_correo = '/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/';
            preg_match_all($patron_correo, $contenido, $correos);

            // Mostrar las direcciones de correo electrónico encontradas
            echo 'Direcciones de Correo Electrónico:<br>';
            foreach ($correos[0] as $correo) {
                echo $correo . '<br>';
            }
        }
    } else {
        echo 'La URL proporcionada no es válida.';
    }
}

?>
    
</body>
</html>