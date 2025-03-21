<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<h3>Ciudades del Jugador seleccionado.</h3>
<br>
<form name="ciuxjug" method="post"action="ciuxjugr.php">
<?php
include 'config.php';
$query = "SELECT * FROM `t_jugador` ORDER BY Jugador";
($result = mysqli_query($conn, $query));
?>
<select name="idjugador" id="idjugador">
<option value="0">Seleccione:</option>
<?php
    while ($row = mysqli_fetch_array($result)) {
                     
    echo '<option type="int" value="'.$row["Id_jugador"].'">'.$row["Jugador"].'</option>';
 
}
echo "</select>";

echo '<input type="hidden" name="jugador" id="jugador" value="'.$row["Jugador"].'">';



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