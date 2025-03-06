<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="../styles.css">
</head>

<body>

<?php
  include '../config.php';

$conn;

$jugador = $_POST['jugador'];
$id_alianza = $_POST['id_alianza'];
$coments_j = $_POST['coments_j'];

echo $jugador;
echo $id_alianza;
echo $coments_j;


$query = "SELECT * FROM `t_alianza` ORDER BY Id_alianza";
?>





    <div>
      <h3>Insertar Jugador</h3>
      <br>
      <form method="POST" action="../ins/insertjug2.php">
        <br>
        Jugador
        <br>
        <input type="text" name="jugador">
        <br>
        Id Alianza	
        <br>
        <select name="id_alianza">
        <?php
        if ($result = mysqli_query($conn, $query)) {

            /* fetch associative array */
            while ($row = mysqli_fetch_array($result)) {
           echo '<option type="int" value="'.$row["Id_alianza"].'">'.$row["Alianza"].'</option>';
    }
        echo " </select>";
  
        ?>
        
        <br>
        Comentarios
        <br>
        <input type="text" name="coments_j">
        <br>
        <br>

        
        <input type="submit" value="Insertar">
      </form>

    </div>
    <?php
    /* free result set */
    mysqli_free_result($result);

}
/* close connection */
mysqli_close($conn);

?>
 
</body>
</html>