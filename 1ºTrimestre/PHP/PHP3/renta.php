<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renta</title>
</head>
<body>
    <h1>Renta</h1>
    <form method="post">

    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre" id="nombre" required> <br><br>

    <label for="apellido">Apellido: </label>
    <input type="text" name="apellido" id="apellido" required> <br><br>

    <label for="email">Email: </label>
    <input type="text" name="email" id="email" required> <br><br>

    <label for="DNI">DNI: </label>
    <input type="text" name="dni" id="dni" required> <br><br>

    <label for="salario">Salario: </label>
    <input type="number" name="salario" id="salario" required> <br><br>

    <label><input type="checkbox" name="colaboracion_ongs"> Colaboración con ONGs</label><br><br>

    <input type="submit" value="Calcular">

    </form>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = htmlspecialchars($_POST["apellido"]);
    $email = htmlspecialchars($_POST["email"]);
    $dni = htmlspecialchars($_POST["dni"]);
    $salario = htmlspecialchars($_POST["salario"]);
    $colaboracionONGs = isset($_POST["colaboracion_ongs"]) ? true : false;

    if ($salario < 10000) {
        $tipo = 5;
    } elseif ($salario < 20000) {
        $tipo = 15;
    } elseif ($salario < 35000) {
        $tipo = 20;
    } elseif ($salario <= 60000) {
        $tipo = 30;
    } else {
        $tipo = 45;
    }

    $exencionFiscal = $colaboracionONGs ? 2 : 0;
    $cantidadPagar = ($salario * $tipo - ($salario * $exencionFiscal / 100)) / 100;

    echo "<p>Nombre: $nombre $apellido</p>";
    echo "<p>Email: $email</p>";
    echo "<p>DNI: $dni</p>";
    echo "<p>Salario Bruto: $salario €</p>";
    echo "<p>Tipo Impositivo: $tipo%</p>";
    echo "<p>Cantidad a Pagar: $cantidadPagar €</p>";
    echo "<p>Colaboración con ONGs: " . ($colaboracionONGs ? "Sí" : "No") . "</p>";
}

?>


</body>
</html>