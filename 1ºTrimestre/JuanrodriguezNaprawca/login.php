
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
    <input type="text" id="usuario" name="usuario" required> <br><br>

    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" required> <br><br>

    <button type="submit">Iniciar Sesión</button>
  </form>
    
<?php
include('config.php');


function cleanInput($input) {
  
    $search = array(
      '@<script [^>]*?>.*?@si',            
      '@< [/!]*?[^<>]*?>@si',            
      '@<style [^>]*?>.*?</style>@siU',    
      '@< ![sS]*?--[ tnr]*>@'         
    );
    
      $output = preg_replace($search, '', $input);
      return $output;
  }

  function sanitize($input) {
    if (is_array($input)) {
        foreach($input as $var=>$val) {
            $output[$var] = sanitize($val);
        }
    }
    else {
        if (get_magic_quotes_gpc()) {
            $input = stripslashes($input);
        }
        $input  = cleanInput($input);
        $output = mysql_real_escape_string($input);
    }
    return $output;
}


$_GET = sanitize($_GET);
$_POST = sanitize($_POST);
$cadena_final = sanitize($cadena_original);



?>

</body>
</html>

