<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="styles.css">
</head>

<body>
<table>
<tr>
<td width='150' style='font-weight: bold'>ID</td>
<td width='250' style='font-weight: bold'>ISLA</td>
<td width='150' style='font-weight: bold'>X</td>
<td width='150' style='font-weight: bold'>Y</td>
<td width='150' style='font-weight: bold'>ID MATERIA</td>
<td width='150' style='font-weight: bold'>COMENTS</td>
</tr>


<?php
include 'config.php';


$conn;

$query = "SELECT * FROM `t_isla` ORDER BY Isla";

if ($result = mysqli_query($conn, $query)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_array($result)) {

    
    echo "
<tr>
<td width='150'>".$row['id_isla']."</td>
<td width='150'>".$row['Isla']."</td>
<td width='150'>".$row['id_x']."</td>
<td width='150'>".$row['id_y']."</td>
<td width='150'>".$row['id_materia']."</td>
<td width='150'>".$row['Comentarios_I']."</td>
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
