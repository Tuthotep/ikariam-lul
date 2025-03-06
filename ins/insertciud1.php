<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="../styles.css">
</head>

<body>
<?php
  include '../config.php';
  $conn;
  ?>

    <div>
      <h1>Insertar Ciudad</h1>
      <br>
      <form method="POST" action="../ins/insertciud2.php">
        <br>
        Ciudad
        <br>
        <input type="text" name="ciudad">
        <br>
        Comentarios
        <br>
        <input type="text" name="coments_c">
        <br>
        Id_jugador
        <br>
        <select name="id_jugador">

        <?php
        $queryj = "SELECT * FROM `t_jugador` ORDER BY Jugador";

        if ($result = mysqli_query($conn, $queryj)) {

            /* fetch associative array */
            while ($row = mysqli_fetch_array($result)) {
           echo '<option type="int" value="'.$row["Id_jugador"].'">'.$row["Jugador"].'</option>';
    }
        echo " </select>";
  }
  mysqli_free_result($result);

        ?>
        <br>
        Id_isla
        <br>
        <select name="id_isla">
        <br>
        <?php
        $queryi = "SELECT * FROM `t_isla` ORDER BY Isla";

        if ($result = mysqli_query($conn, $queryi)) {

            /* fetch associative array */
            while ($row = mysqli_fetch_array($result)) {
           echo '<option type="int" value="'.$row["Id_isla"].'">'.$row["Isla"].'</option>';
    }
        echo " </select>";
  }
  mysqli_free_result($result);
  mysqli_close($conn);
        ?>
        <br>
        <br>
        <input type="submit" value="Insertar">
      </form>
    </div>
  
 

</body>
</html>
