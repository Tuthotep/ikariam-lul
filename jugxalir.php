<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="styles.css">
</head>

<body>
<?php
$ali = $_POST['alianza']; // Para select
?>

<h3>Jugadores de la alianza con id <?php echo "$ali"; ?>.</h3>
      <br>

<table>
<tr>
<td width='150' style='font-weight: bold'>ID</td>
<td width='250' style='font-weight: bold'>JUGADOR</td>
<td width='150' style='font-weight: bold'>COMENTS</td>
<td width='150' style='font-weight: bold'>ID ALI</td>

</tr>

<?php
include 'config.php';

$query = "SELECT * FROM `t_jugador` WHERE `Idalianza` = '$ali' ORDER BY `Jugador`";

if ($result = mysqli_query($conn, $query)) {

    while ($row = mysqli_fetch_array($result)) {
    
    echo "

    <tr>

    <td width='150'>".$row['Id_jugador']."</td>
    <td width='150'>".$row['Jugador']."</td>
    <td width='150'>".$row['Comentarios_jug']."</td>
    <td width='150'>".$row['Idalianza']."</td>

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