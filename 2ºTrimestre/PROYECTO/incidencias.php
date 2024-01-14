<?php
  include "conexion.php";
        
  header("Content-type:text/html;charset=utf-8");

$sql = "SELECT * FROM incidencias";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Planta: " . $row["planta"]. " -Aula: " . $row["aula"]. "- Descripcion: " . $row["descripcion"]. " - Alta: " . $row["alta"]. " - Revision: " . $row["revision"]. "- Resolucion: " . $row["resolucion"]. " - Comentario: " . $row["comentario"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>