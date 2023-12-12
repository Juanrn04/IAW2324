<?php
// Crear una cookie segura y httponly
$nombreCookie = 'cookieSegura';
$valorCookie = 'valor_cookie_segura';

// Define un tiempo de expiración razonable (puedes ajustar según tus necesidades)
$tiempoExpiracion = time() + 3600; // Caduca en 1 hora

// Crea la cookie segura y httponly
setcookie($nombreCookie, $valorCookie, $tiempoExpiracion, '/', null, true, true);

// Verifica la integridad de la cookie
if (isset($_COOKIE[$nombreCookie]) && $_COOKIE[$nombreCookie] === $valorCookie) {
    echo 'Cookie segura y httponly creada y verificada correctamente.';
} else {
    echo 'Error: La cookie no es segura o no se pudo verificar.';
}
?>