<?php
#Conectamos con la base de datos
$servername = "sql207.thsite.top";
$username = "thsi_36017453";
$password = "a!qeOZEc";
$dbname = "thsi_36017453_prueba";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

#Cogemos el archivo sql y lo leemos
$sql_file = 'tabla.sql';
$sql_query = file_get_contents($sql_file);

if ($conn->multi_query($sql_query) === TRUE) {
    echo "Tabla creada correctamente";
} else {
    echo "Error al crear la tabla: " . $conn->error;
}


?>