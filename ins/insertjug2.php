<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="../styles.css">
</head>

<body>

Agregando <?php echo $_POST["jugador"]; ?> ,<br>
con alianza id <?php echo $_POST["id_alianza"]; ?> a la base de datos.<br>



  <?php


  include '../config.php';

  
  
  $sql = "INSERT INTO t_jugador (`Id_jugador`, `Jugador`, `Comentarios_jug`, `Idalianza`)
  VALUES (NULL ,'$_POST[jugador]' , '$_POST[coments_j]' , '$_POST[id_alianza]' )";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }


                           

/* close connection */
mysqli_close($conn);

  ?>
  
</body>
</html>
