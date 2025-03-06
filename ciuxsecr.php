<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="styles.css">
</head>

<body>
<?php
$jug = $_POST['jugador']; // Para select
?>

// <?php echo "$jug"; ?> //

<h3>Ciudades del Jugador ID: <?php echo "$jug"; ?>.</h3>
      <br>

<table>
<tr>
<td width='250' style='font-weight: bold'>CIUDAD</td>
<td width='250' style='font-weight: bold'></td>
<td width='250' style='font-weight: bold'></td>
<td width='250' style='font-weight: bold'></td>
<td width='250' style='font-weight: bold'></td>
<td width='250' style='font-weight: bold'></td>
<td width='250' style='font-weight: bold'></td>
<td width='250' style='font-weight: bold'></td>
<td width='250' style='font-weight: bold'></td>
<td width='250' style='font-weight: bold'></td>
<td width='250' style='font-weight: bold'></td>
<td width='250' style='font-weight: bold'></td>
<td width='250' style='font-weight: bold'></td>
<td width='250' style='font-weight: bold'></td>
<td width='250' style='font-weight: bold'></td>

</tr>

<?php
include 'config.php';


$query = "SELECT
t_ciudad.Ciudad,t_ciudad.Comentarios_ciu,
t_isla.Isla,t_isla.X,t_isla.Y,t_isla.Comentarios_isl,
t_materia.Materia,
t_sector.Sector,t_sector.Comentarios_sector,
t_jugador.Jugador,t_jugador.Comentarios_jug,
t_alianza.Code,t_alianza.Comentarios_ali,t_alianza.Aliado,t_alianza.Guerra


	FROM t_ciudad
		LEFT JOIN t_isla ON t_ciudad.Idisla = t_isla.Id_isla
		LEFT JOIN t_materia ON t_isla.Idmateria = t_materia.id_materia
		LEFT JOIN t_sector ON t_isla.Idsector = t_sector.Id_sector
		LEFT JOIN t_jugador ON t_ciudad.Idjugador = t_jugador.Id_jugador
		LEFT JOIN t_alianza ON t_jugador.Idalianza = t_alianza.Id_alianza
         ORDER BY Sector";

if ($result = mysqli_query($conn, $query)) {

    while ($row = mysqli_fetch_array($result)) {
    
    echo "

    <tr>
    <td width='150'>".$row['Ciudad']."</td>
    <td width='150'>".$row['Comentarios_ciu']."</td>
    <td width='150'>".$row['Isla']."</td>
    <td width='150'>".$row['X']."</td>
    <td width='150'>".$row['Y']."</td>
    <td width='150'>".$row['Comanterios_isl']."</td>
    <td width='150'>".$row['Materia']."</td>
    <td width='150'>".$row['Sector']."</td>
    <td width='150'>".$row['Comentarios_sector']."</td>
    <td width='150'>".$row['Jugador']."</td>
    <td width='150'>".$row['Comentarios_jug']."</td>
    <td width='150'>".$row['Code']."</td>
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
</form>
</body>
</html>