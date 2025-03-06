<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="../styles.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



</head>

<body>
<table>
<tr>
<td width='150' style='font-weight: bold'>ID</td>
<td width='250' style='font-weight: bold'>JUGADOR</td>
<td width='150' style='font-weight: bold'>ID ALI</td>
<td width='150' style='font-weight: bold'>ALIANZA</td>
<td width='150' style='font-weight: bold'>CODE</td>
</tr>


<?php
include '../config.php';


$conn;

$query = "SELECT * FROM `V_JUGADORES` ORDER BY Jugador";

if ($result = mysqli_query($conn, $query)) {

      /* fetch associative array */
      while ($row = mysqli_fetch_array($result)) {

    
    echo "
<tr>
<td width='150'>".$row['id_jugador']."</td>
<td width='150'>".$row['Jugador']."</td>
<td width='150'>".$row['id_alianza']."</td>
<td width='150'>".$row['Alianza']."</td>
<td width='150'>".$row['Code']."</td>
</tr>

";
  }
    /* free result set */
    mysqli_free_result($result);
}

echo "</table>";
/* close connection */
mysqli_close($conn);
?>





</body>
</html>
