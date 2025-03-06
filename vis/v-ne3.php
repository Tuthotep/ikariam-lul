<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" type="text/css" href="../styles.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">





</head>

<body>

<h1>Sector NorEste Nº3</h1>
<?php
include '../config.php';
$querys = "SELECT * FROM t_sector WHERE Id_sector = 12";  
  $results = mysqli_query($conn, $querys);
 $rows = mysqli_fetch_array($results, MYSQLI_ASSOC);
$id = $rows['Id_sector'];
$comm = $rows['Comentarios_sector'];
$numislas = $rows['Numislas'];
$sec = $rows['Sector'];

echo"
      <br>
<table>
<tr>
<td>Id del sector:</td>
<td>$id</td>
<td></td>
<td>Num. de islas:</td>
<td>$numislas</td>
<td></td>
<td>Comentarios:</td>
<td>$comm</td>
</tr>
</table>
<br>
";


    /* free result set */
    mysqli_free_result($results);
    mysqli_close($conn);


    ?>


<h3>Ciudades NE3</h3>
      <br>
<table>
<tr>
<td width='250' style='font-weight: bold'>CIUDAD</td>
<td width='150' style='font-weight: bold'>COM.C</td>
<td width='150' style='font-weight: bold'>ISLA</td>
<td width='150' style='font-weight: bold'>SECTOR</td>
<td width='150' style='font-weight: bold'>COM.S</td>
<td width='150' style='font-weight: bold'>X</td>
<td width='250' style='font-weight: bold'>Y</td>
<td width='150' style='font-weight: bold'>COM.I</td>
<td width='150' style='font-weight: bold'>MATERIA</td>
<td width='150' style='font-weight: bold'>NIV.MAT</td>
<td width='150' style='font-weight: bold'>NIV.BOS</td>

<td width='150' style='font-weight: bold'>JUGADOR</td>
<td width='150' style='font-weight: bold'>COM.J</td>
<td width='250' style='font-weight: bold'>ALIANZA</td>
<td width='150' style='font-weight: bold'>CODE</td>
<td width='150' style='font-weight: bold'>INTEG.</td>
<td width='150' style='font-weight: bold'>COM.A</td>
<td width='150' style='font-weight: bold'>ALIADO</td>
<td width='150' style='font-weight: bold'>GUERRA</td>
</tr>

<?php
include '../config.php';
$conn;
$query = "SELECT
t_ciudad.Ciudad,t_ciudad.Comentarios_ciu,
t_isla.Isla,t_isla.X,t_isla.Y,t_isla.Comentarios_isl,
t_materia.Materia,t_isla.Nivmateria,t_isla.Nivbosque,
t_sector.Sector,t_sector.Comentarios_sector,
t_jugador.Jugador,t_jugador.Comentarios_jug,t_jugador.Idalianza,
t_alianza.Alianza,t_alianza.Code,t_alianza.Miembros,t_alianza.Comentarios_ali,t_alianza.Aliado,t_alianza.Guerra


	FROM t_ciudad
		LEFT JOIN t_isla ON t_ciudad.Idisla = t_isla.Id_isla
		LEFT JOIN t_materia ON t_isla.Idmateria = t_materia.id_materia
		LEFT JOIN t_sector ON t_isla.Idsector = t_sector.Id_sector
		LEFT JOIN t_jugador ON t_ciudad.Idjugador = t_jugador.Id_jugador
		LEFT JOIN t_alianza ON t_jugador.Idalianza = t_alianza.Id_alianza
    WHERE t_isla.X BETWEEN 84 AND 99 AND t_isla.Y BETWEEN 1 AND 16";

if ($result = mysqli_query($conn, $query)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_array($result)) {

      

    
    echo "
<tr>
<td width='150'>".$row['Ciudad']."</td>
<td width='150'>".$row['Comentarios_ciu']."</td>
<td width='150'>".$row['Isla']."</td>
<td width='150'>".$row['Sector']."</td>
<td width='150'>".$row['Comentarios_sector']."</td>
<td width='150'>".$row['X']."</td>
<td width='150'>".$row['Y']."</td>
<td width='150'>".$row['Comentarios_isl']."</td>
<td width='150'>".$row['Materia']."</td>
<td width='150'>".$row['Nivmateria']."</td>
<td width='150'>".$row['Nivbosque']."</td>
<td width='150'>".$row['Jugador']."</td>
<td width='150'>".$row['Comentarios_jug']."</td>
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
mysqli_close($link);
?>



</body>
</html>
