<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="../styles.css">
</head>

<body>

<h2>Tabla Islas en la BD</h2>
      <br>

<table>
<tr>
<td width='150' style='font-weight: bold'>ID</td>
<td width='250' style='font-weight: bold'>ISLA</td>
<td width='150' style='font-weight: bold'>X</td>
<td width='150' style='font-weight: bold'>Y</td>
<td width='150' style='font-weight: bold'>SECTOR</td>
<td width='150' style='font-weight: bold'>ID MATERIA</td>
<td width='150' style='font-weight: bold'>COMENTS</td>
<td width='150' style='font-weight: bold'>Niv.Materia</td>
<td width='150' style='font-weight: bold'>Niv.Bosque</td>
</tr>


<?php
include '../config.php';


$conn;

$query = "SELECT * FROM `t_isla` ORDER BY Isla";

if ($result = mysqli_query($conn, $query)) {
  $row_cnt = $result->num_rows;
  echo "Total de islas mapeadas:$row_cnt<br><br>";
    /* fetch associative array */
    while ($row = mysqli_fetch_array($result)) {

    
    echo "
<tr>
<td width='150'>".$row['Id_isla']."</td>
<td width='150'>".$row['Isla']."</td>
<td width='150'>".$row['X']."</td>
<td width='150'>".$row['Y']."</td>
<td width='150'>".$row['Idsector']."</td>
<td width='150'>".$row['Idmateria']."</td>
<td width='150'>".$row['Comentarios_isl']."</td>
<td width='150'>".$row['Nivmateria']."</td>
<td width='150'>".$row['Nivbosque']."</td>
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
