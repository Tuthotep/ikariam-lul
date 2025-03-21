<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="../styles.css">
</head>

<body>

<h2>Tabla Ciudades en la BD</h2>
      <br>

<table>
<tr>
<td width='150' style='font-weight: bold'>ID</td>
<td width='250' style='font-weight: bold'>CIUDAD</td>
<td width='150' style='font-weight: bold'>ID ISLA</td>
<td width='150' style='font-weight: bold'>ID JUG.</td>
<td width='150' style='font-weight: bold'>COMENTS</td>
</tr>


<?php
include '../config.php';


$conn;

$query = "SELECT * FROM `t_ciudad` ORDER BY Ciudad";

if ($result = mysqli_query($conn, $query)) {

  $row_cnt = $result->num_rows;
  echo "Total de ciudades mapeadas:$row_cnt<br><br>";

    /* fetch associative array */
    while ($row = mysqli_fetch_array($result)) {

    
    echo "
<tr>
<td width='150'>".$row['Id_ciudad']."</td>
<td width='150'>".$row['Ciudad']."</td>
<td width='150'>".$row['Idisla']."</td>
<td width='150'>".$row['Idjugador']."</td>
<td width='150'>".$row['Comentarios_ciu']."</td>
</tr>

";
  }
    /* free result set */
    mysqli_free_result($result);
}

echo "</table>";
/* close connection */
mysqli_close($link);
?>
</body>
</html>
