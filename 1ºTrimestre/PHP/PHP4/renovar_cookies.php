<?php

setcookie('cookie1', '', time() - 3600);
setcookie('cookie2', '', time() - 86400);
setcookie('cookie3', '', time() - 604800);


setcookie('cookie1', 'nuevo_valor_cookie1', time() + 3600);
setcookie('cookie2', 'nuevo_valor_cookie2', time() + 86400);
setcookie('cookie3', 'nuevo_valor_cookie3', time() + 604800);

echo 'Cookies renovadas. <a href="mostrar_cookies.php">Mostrar Cookies</a>';
?>