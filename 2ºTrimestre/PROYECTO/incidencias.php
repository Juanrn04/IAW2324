
<?php include "header.php"; ?>

    <h2>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h2>

<?php

/*Conexion a la base de datos de PEPE
include "conexion.php";
header("Content-type:text/html;charset=utf-8"); */

//Conexion a la base de datos de JUAN
$servername = "sql307.thsite.top";
$username = "thsi_35748575";
$password = "uS9rA5MT";
$dbname = "thsi_35748575_bdprueba";
  
// creamos la conexion
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8mb4");
// Confirmamos que la conexión se ha realizado de forma correcta
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Operación a realizar
$sql = "SELECT * FROM incidencias";
$result = $conn->query($sql);

//Estrutura de la tabla
if ($result->num_rows > 0) {
echo "<table border='2'>
<tr>
<th>Id</th>
<th>Planta</th>
<th>Aula</th>
<th>Descripcion</th>
<th>Alta</th>
<th>Revision</th>
<th>Resolucion</th>
<th>Comentario</th>
</tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['planta'] . "</td>";
    echo "<td>" . $row['aula'] . "</td>";
    echo "<td>" . $row['descripcion'] . "</td>";
    echo "<td>" . $row['alta'] . "</td>";
    echo "<td>" . $row['revision'] . "</td>";
    echo "<td>" . $row['resolucion'] . "</td>";
    echo "<td>" . $row['comentario'] . "</td>";
    echo " <td class='text-center'> <a href='view.php?incidencia_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> Ver</a> </td>";
    echo " <td class='text-center' > <a href='update.php?editar&incidencia_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> Editar</a> </td>";
    echo " <td class='text-center'>  <a href='delete.php?eliminar={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> Eliminar</a> </td>";
    echo "</tr>";
}
echo "</table>";

} else {
  echo "0 results";
}

include "footer.php";

$conn->close();
?>