<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="../styles.css">
</head>

<body>
<h3>Tabla Jugadores en la BD</h3>
      <br>


<table>
<tr>
<td width='150' style='font-weight: bold'>ID</td>
<td width='250' style='font-weight: bold'>JUGADOR</td>
<td width='150' style='font-weight: bold'>ID ALI</td>
<td width='150' style='font-weight: bold'>COMENTS</td>
</tr>


<?php
include '../config.php';


$conn;

$query = "SELECT * FROM `t_jugador` ORDER BY Idalianza";

if ($result = mysqli_query($conn, $query)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_array($result)) {

    
    echo "
<tr>
<td width='150'>".$row['Id_jugador']."</td>
<td width='150'>".$row['Jugador']."</td>
<td width='150'>".$row['Idalianza']."</td>
<td width='150'>".$row['Comentarios_jug']."</td>
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
