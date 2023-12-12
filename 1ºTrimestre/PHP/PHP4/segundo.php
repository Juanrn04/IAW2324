<?php
// Iniciar la sesión
session_start();

// Mostrar la información de la sesión
echo 'Información de la sesión en la página 2:<br>';
echo 'Usuario: ' . $_SESSION['usuario'];
?>