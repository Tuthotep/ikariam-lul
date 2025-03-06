<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="../styles.css">
</head>

<body>
  <?php
  include '../config.php';

$conn;


$ciudad = $_POST['ciudad'];
$id_isla = $_POST['id_isla'];
$id_jugador = $_POST['id_jugador'];
$coments_c = $_POST['coments_c'];

echo $ciudad;
echo $coments_c;
echo $id_jugador;
echo $id_isla;



 mysqli_query ($conn,"INSERT into t_ciudad (Id_ciudad, Ciudad,  Comentarios_ciu, Idjugador, Idisla)
  values ('0','$ciudad','$coments_c','$id_jugador','$id_isla')");


echo "Nueva ciudad con id: " . mysqli_insert_id($conn);

/* close connection */
mysqli_close($conn);

  ?>

</body>
</html>
