<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
<?php
include 'config.php';
$isla = $_GET['isla']; // Para select


$sqlisla = "SELECT
t_isla.*,
t_materia.*,
t_sector.*
FROM t_isla
		LEFT JOIN t_materia ON t_isla.Idmateria = t_materia.id_materia
		LEFT JOIN t_sector ON t_isla.Idsector = t_sector.Id_sector
    WHERE t_isla.Isla LIKE '$isla'";


if ($resulti = mysqli_query($conn, $sqlisla)) {



    while ($rowi = mysqli_fetch_array($resulti)) {
    
    echo "




<table>
<tr>
<td>
<h1>Isla ".$isla."</h1></td><td><h1>Sector ".$rowi['Sector']."</h1>
</td>
</tr>
<tr>
<td><h2>Coord.X: ".$rowi['X']." </h2></td><td><h2>Coord.Y: ".$rowi['Y']."</h2>
</tr>
<tr><td>
<h3>Nº de islas en el sector:</h3></td><td><h3>".$rowi['Numislas']."</h3>
</td></tr>
<tr><td>
<h3>Comentarios del sector</h3>
</td><td><blockquote>
".$rowi['Comentarios_sector']."
</blockquote>
</td>
<tr>
<td>
<h3>Comentarios de la isla</h3></td>
<td><blockquote>
".$rowi['Comentarios_isl']."
</blockquote>
</td>
</tr>
</table>
<br>
<hr>
<br>
    ";
}

    /* free result set */
    mysqli_free_result($resulti);
}







$query = "SELECT
t_ciudad.*,
t_isla.*,
t_materia.*,
t_sector.*,
t_jugador.*,
t_alianza.*
FROM t_ciudad
		LEFT JOIN t_isla ON t_ciudad.Idisla = t_isla.Id_isla
		LEFT JOIN t_materia ON t_isla.Idmateria = t_materia.id_materia
		LEFT JOIN t_sector ON t_isla.Idsector = t_sector.Id_sector
		LEFT JOIN t_jugador ON t_ciudad.Idjugador = t_jugador.Id_jugador
		LEFT JOIN t_alianza ON t_jugador.Idalianza = t_alianza.Id_alianza
        WHERE t_isla.Isla LIKE '$isla'";  

if ($result = mysqli_query($conn, $query)) {



    while ($row = mysqli_fetch_array($result)) {
    
    echo "


<table>
      <tr>
    <td width='150'>".$row['Ciudad']."</td>
    <td width='150'>".$row['Comentarios_ciu']."</td>
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


</body>
</html>
