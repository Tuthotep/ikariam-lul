<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="../styles.css">
</head>

<body>

<h3>Tabla Alianzas en la BD</h3>
      <br>
<table>
<tr>
<td width='150' style='font-weight: bold'>ID</td>
<td width='250' style='font-weight: bold'>ALIANZA</td>
<td width='150' style='font-weight: bold'>CODE</td>
<td width='150' style='font-weight: bold'>MIEMBROS</td>
<td width='150' style='font-weight: bold'>COMENTS</td>
<td width='150' style='font-weight: bold'>ALIADA</td>
<td width='150' style='font-weight: bold'>GUERRA</td>
</tr>


<?php
include '../config.php';



$query = "SELECT * FROM `t_alianza` ORDER BY Id_alianza";

if ($result = mysqli_query($conn, $query)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_array($result)) {

    
    echo "
<tr>
<td width='150'>".$row['Id_alianza']."</td>
<td width='150'>".$row['Alianza']."</td>
<td width='150'>".$row['Code']."</td>
<td width='150'>".$row['Miembros']."</td>
<td width='150'>".$row['Comentarios_ali']."</td>
<td width='150'>".$row['Aliado']."</td>
<td width='150'>".$row['Guerra']."</td>
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
