<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="../styles.css">
</head>

<body>

Agregando <?php echo $_POST["isla"]; ?>,<br>
coord.X: <?php echo $_POST["x"]; ?>, coord.Y: <?php echo $_POST["y"]; ?>,<br>
con IdMateria: <?php echo $_POST["materia"]; ?>, de nivel: <?php echo $_POST["nivmat"]; ?>,<br>
nivel de bosque: <?php echo $_POST["nivbos"]; ?>,<br>
y dentro del Idsector: <?php echo $_POST["sector"]; ?>,<br>
a la base de datos.<br>


  <?php
  include '../config.php';


  $sql = "INSERT INTO t_isla
  (`Id_isla`, `Isla`, `X`, `Y`, `Comentarios_isl`, `Idmateria`, `Idsector`, `Nivmateria`, `Nivbosque`)
  VALUES
  (NULL , '$_POST[isla]' , '$_POST[x]' , '$_POST[y]' , '$_POST[coments_i]' , '$_POST[materia]' , '$_POST[sector]' , '$_POST[nivmat]' , '$_POST[nivbos]' )";
  

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
