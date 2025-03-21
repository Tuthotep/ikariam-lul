<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="styles.css">
</head>

<body>
<?php
$jugid = $_POST['idjugador']; // Para select
$jug = $_POST['jugador']; // Para select

var_dump ($_POST);

?>

// <?php echo "$jugid"; ?> //
// <?php echo "$jug"; ?> //
<h3>Ciudades del Jugador ID: <?php echo "$jugid"; ?>.</h3>
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


$query = "SELECT * FROM `t_ciudad` WHERE `Idjugador` = '$jugid' ORDER BY Ciudad";

if ($result = mysqli_query($conn, $query)) {
    $row_cnt = $result->num_rows;
    echo "Total de islas mapeadas:$row_cnt<br><br>";
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