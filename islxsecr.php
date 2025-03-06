<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="styles.css">
</head>

<body>
<?php
$sector = $_POST['sector']; // Para select
?>

<h3>Islas del sector id <?php echo "$sector"; ?>.</h3>
      <br>

<table>
<tr>
<td width='150' style='font-weight: bold'>ID</td>
<td width='250' style='font-weight: bold'>ISLA</td>
<td width='150' style='font-weight: bold'>X</td>
<td width='150' style='font-weight: bold'>Y</td>
<td width='150' style='font-weight: bold'>COMENTS</td>
<td width='150' style='font-weight: bold'>MAT</td>
<td width='150' style='font-weight: bold'>SEC</td>
<td width='150' style='font-weight: bold'>NIVMAT</td>
<td width='150' style='font-weight: bold'>NIVBOS</td>


</tr>

<?php
include 'config.php';

$query = "SELECT * FROM `t_isla` WHERE `Idsector` = '$sector' ORDER BY `Isla`";

if ($result = mysqli_query($conn, $query)) {

    while ($row = mysqli_fetch_array($result)) {
    
    echo "

    <tr>

    <td width='150'>".$row['Id_isla']."</td>
    <td width='150'>".$row['Isla']."</td>
    <td width='150'>".$row['X']."</td>
    <td width='150'>".$row['Y']."</td>
    <td width='150'>".$row['Comentarios_isl']."</td>
    <td width='150'>".$row['Idmateria']."</td>
    <td width='150'>".$row['Idsector']."</td>
    <td width='150'>".$row['Nivmat']."</td>
    <td width='150'>".$row['Nivbos']."</td>



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