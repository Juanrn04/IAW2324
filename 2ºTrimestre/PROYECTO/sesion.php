<?php
    session_set_cookie_params(120);
    session_start();
    if($_SESSION['viene']=="si"){
        $usuario=$_SESSION['usuario'];
    }
    else{
        header('Location: http://juan.thsite.top/crud/proyecto/login.php');
        session_abort();
        die();
    }
?>