<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteo</title>
</head>
<body>
    <form action="sorteo.php" method="post">
        <label for="participantes">Número de Participantes:</label>
        <input type="number" name="participantes" required min="1"><br>

        <input type="submit" value="Realizar Sorteo">
    </form>

    <?php


    $numeroParticipantes = $_POST["participantes"];

    if ($numeroParticipantes <= 0) {
        echo "Por favor, introduce un número válido de participantes.";
        exit;
    }

    else{

    $numeroGanador = rand(1, $numeroParticipantes);

    echo "<p>Número de Participantes: $numeroParticipantes</p>";
    echo "<p>¡El número ganador es: $numeroGanador!</p>";
    }

?>

    
</body>
</html>