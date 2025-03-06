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
<td width='150' style='font-weight: bold'>ID</td>
<td width='250' style='font-weight: bold'>CIUDAD</td>
<td width='150' style='font-weight: bold'>ISLA</td>
<td width='150' style='font-weight: bold'>JUGADOR</td>
</tr>

<?php
include 'config.php';


$query = "SELECT * FROM `t_ciudad` WHERE `Idjugador` = '$jug' ORDER BY Ciudad";

if ($result = mysqli_query($conn, $query)) {

    while ($row = mysqli_fetch_array($result)) {
    
    echo "

    <tr>
    <td width='150'>".$row['Id_ciudad']."</td>
    <td width='150'>".$row['Ciudad']."</td>
    <td width='150'>".$row['Idisla']."</td>
    <td width='150'>".$row['Idjugador']."</td>
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