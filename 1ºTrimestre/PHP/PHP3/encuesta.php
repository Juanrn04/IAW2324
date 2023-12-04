<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
</head>
<body>
    <form method="post">

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="sexo">Sexo:</label> <br><br>
    <input type="radio" id="mujer" name="sexo" value="mujer">
    <label for="mujer">Mujer</label>
    <input type="radio" id="hombre" name="sexo" value="hombre">
    <label for="hombre">Hombre</label><br><br>

    <label for="info">¿Quieres recibir información?</label>
    <input type="checkbox" id="info" name="info"><br><br>

    <label for="comunidad">Comunidad autónoma:</label>
    <select name="comunidad" id="comunidad">
    <option>Huelva</option>
    <option>Sevilla</option>
    <option>Granada</option>
    <option>Cordoba</option>
    <option>Jaen</option>
    <option>Malaga</option>
    <option>Almeria</option>
    <option>Cadiz</option>
    </select> <br> <br>

    <button name="submit" type="submit">Verificar</button>
  </form>


    <?php
     $nombre = htmlspecialchars($_POST['nombre']);
     $sexo = htmlspecialchars($_POST['sexo']);
     $info = htmlspecialchars($_POST['info']);
     $comunidad = htmlspecialchars($_POST['comunidad']);

     if(isset($_POST["submit"])) {
     echo "<p> Se llama:" $nombre . ", es del sexo:" . $sexo .  $info . $comunidad

     }




    ?>
</body>
</html>