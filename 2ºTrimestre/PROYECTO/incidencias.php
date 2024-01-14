<?php


  $servername = "sql307.thsite.top";
  $username = "thsi_35748575";
  $password = "uS9rA5MT";
  $dbname = "thsi_35748575_bdprueba";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  $conn->set_charset("utf8mb4");
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$sql = "SELECT * FROM incidencias";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<table border='1'>
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
    echo "</tr>";
}
echo "</table>";

} else {
  echo "0 results";
}

$conn->close();
?>