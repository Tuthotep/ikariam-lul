<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" type="text/css" href="../styles.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">





</head>

<body>

<h3>Ciudades del Sector NO4</h3>
      <br>

<table>
<tr>
<td width='250' style='font-weight: bold'>CIUDAD</td>
<td width='150' style='font-weight: bold'>COM.C</td>
<td width='150' style='font-weight: bold'>ISLA</td>
<td width='150' style='font-weight: bold'>X</td>
<td width='250' style='font-weight: bold'>Y</td>
<td width='150' style='font-weight: bold'>COM.I</td>
<td width='150' style='font-weight: bold'>LAST.UP</td>
<td width='150' style='font-weight: bold'>MATERIA</td>
<td width='150' style='font-weight: bold'>JUGADOR</td>
<td width='150' style='font-weight: bold'>COM.J</td>
<td width='250' style='font-weight: bold'>ALIANZA</td>
<td width='150' style='font-weight: bold'>CODE</td>
<td width='150' style='font-weight: bold'>COM.A</td>
<td width='150' style='font-weight: bold'>GUERRA</td>
</tr>


<?php
include '../config.php';
$conn;
$query = "SELECT * FROM `V_TOTAL` WHERE `id_x` BETWEEN 1 AND 16 AND `id_y` BETWEEN 17 AND 32";

if ($result = mysqli_query($conn, $query)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_array($result)) {

      

    
    echo "
<tr>
<td width='150'>".$row['Ciudad']."</td>
<td width='150'>".$row['Comentarios_C']."</td>
<td width='150'>".$row['Isla']."</td>
<td width='150'>".$row['id_x']."</td>
<td width='150'>".$row['id_y']."</td>
<td width='150'>".$row['Comentarios_I']."</td>
<td width='150'>".$row['last_update']."</td>
<td width='150'>".$row['Materia']."</td>
<td width='150'>".$row['Jugador']."</td>
<td width='150'>".$row['Comentarios_J']."</td>
<td width='150'>".$row['Alianza']."</td>
<td width='150'>".$row['Code']."</td>
<td width='150'>".$row['Comentarios_A']."</td>
<td width='150'>".$row['Guerra']."</td>
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
