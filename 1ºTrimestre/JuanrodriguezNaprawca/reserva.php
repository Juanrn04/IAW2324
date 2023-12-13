<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="">Nombre: </label> <input type="text" name="nombre"> <br><br>
        <label for="">Apellidos: </label> <input type="text" name="apellidos"><br><br>
        <label for="">Email: </label> <input type="text" name="email"><br><br>
        <label for="">DNI: </label> <input type="text" name="dni"><br><br>
        <label for="">Dia entrada: </label> <input type="date" name="entrada"> <br> <br>
        <label for="">Dia salida: </label> <input type="date" name="salida"> <br> <br>
        <label for="">Habitación: </label><select name="habitacion" id="habitacion"><br><br>
            <option value="hab0">Simple(30€)</option>
            <option value="hab2">Doble(50€)</option>
            <option value="hab3">Triple(80€)</option>
            <option value="hab4">Suite(100€)</option>
        </select><br><br>
        <button type="submit" name="submit">Registrar</button> <br><br>
    </form>
    <?php
        if(isset($_POST["submit"])) {       
            $nombre=htmlspecialchars($_POST['nombre']);
            $apellidos=htmlspecialchars($_POST['apellidos']);
            $email=htmlspecialchars($_POST['email']);
            $dni=htmlspecialchars($_POST['dni']);
            $fechaInicio=htmlspecialchars($_POST['entrada']);
            $fechaFin=htmlspecialchars($_POST['salida']);
            $habitacion=htmlspecialchars($_POST['habitacion']);
           
                if(is_valid_dni($dni)){

                    switch ($habitacion) {
                        case "hab0":
                            $resultado="Simple(30€)";
                            break;
                        case "hab1":
                            $resultado="Doble(50€)";
                            break;
                        case "hab2":
                            $resultado="Triple(80€)";
                            break;
                        case "hab3":
                            $resultado="Suite(100€)";
                            break;
                        default:
                            echo "Opción no reconocida";
                    };


                    echo "El cliente $apellidos, $nombre con dni $dni y Email $email ha reservado una habitacion $resultado para el $fechaInicio y sale el $fechaFin" . "<br>";

                    echo "<img src='imagenes/$habitacion'>";
                }
                else{
                    echo "El dni no es válido";
                };
           

        };

        function is_valid_dni($dni){
            $letter = substr($dni, -1);
            $numbers = substr($dni, 0, -1);
          
            if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numbers%23, 1) == $letter && strlen($letter) == 1 && strlen ($numbers) == 8 ){
              return true;
            }
            return false;
          }
    ?>
</body>
</html>