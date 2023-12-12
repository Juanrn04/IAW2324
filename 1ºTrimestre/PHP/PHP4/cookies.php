<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>

<?php
// Crear y enviar cookies
setcookie('cookie1', 'chocolate', time() + 3600); 
setcookie('cookie2', 'mantequilla', time() + 3600); 
setcookie('cookie3', 'jengibre', time() + 3600); 

// Mostrar cookies por pantalla
echo 'Cookies creadas y enviadas:<br>';
echo 'Cookie 1: ' . $_COOKIE['cookie1'] . '<br>';
echo 'Cookie 2: ' . $_COOKIE['cookie2'] . '<br>';
echo 'Cookie 3: ' . $_COOKIE['cookie3'] . '<br>';

echo '<br><a href="renovar_cookies.php">Renovar Cookies</a>';

?>
    
</body>
</html>