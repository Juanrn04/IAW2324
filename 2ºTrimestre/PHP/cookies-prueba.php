<?php
    setcookie("nombre", "Juanillo");

    if (isset($_COOKIE["nombre"])) {
        print "<p>Su nombre es $_COOKIE[nombre]</p>";
    } else {
        print "<p>No sé su nombre.</p>";
    }
?>
