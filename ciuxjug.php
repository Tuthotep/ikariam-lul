<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<h3>Ciudades del Jugador seleccionado.</h3>
<br>
<form name="ciuxjug" method="post"action="ciuxjugr.php">
<select name="jugador">
<option value="0">Seleccione:</option>
<?php
include 'config.php';
$query = "SELECT * FROM `t_jugador` ORDER BY Jugador";
if ($result = mysqli_query($conn, $query)) {
    /* fetch associative array */
    while ($row = mysqli_fetch_array($result)) {
                     
    echo '<option type="int" value="'.$row["Id_jugador"].'">'.$row["Jugador"].'</option>';
}
  
echo "</select>";
}
?>
<br>
<input type=submit value=Enviar>

<?php
/* free result set */
 mysqli_free_result($result);

 /* close connection */
mysqli_close($conn);
?>

</body>
</html>