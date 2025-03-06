<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="../styles.css">
</head>

<body>


<?php
  include '../config.php';



$isla = $_POST['isla'];
$x = $_POST['x'];
$y = $_POST['y'];
$coments_i = $_POST['coments_i'];
$materia = $_POST['materia'];
$sector = $_POST['sector'];
$nivmat = $_POST['nivmat'];
$nivbos = $_POST['nivbos'];

echo $isla;
echo $x;
echo $y;
echo $coments_i;
echo $materia;
echo $sector;
echo $nivmat;
echo $nivbos;




?>


    <div>
      <h1>Insertar Isla</h1>
      <br>
      <form method="POST" action="../ins/insertisla2.php">
        <br>
        Isla
        <br>
        <input type="text" name="isla">
        <br>
        X	
        <br>
        <input type="int" name="x">
        <br>
        Y
        <br>
        <input type="int" name="y">
        <br>
        Comentarios
        <br>
        <input type="text" name="coments_i">
        <br>
        Id_materia
        <br>
        <select name="materia">
        <?php
        $querym = "SELECT * FROM `t_materia` ORDER BY Id_materia";
        if ($result = mysqli_query($conn, $querym)) {

            /* fetch associative array */
            while ($row = mysqli_fetch_array($result)) {
           echo '<option type="int" value="'.$row["Id_materia"].'">'.$row["Materia"].'</option>';
    }
        echo " </select>";
  }
  mysqli_free_result($result);
        ?>
        <br>
        Id_sector
        <br>
        <select name="sector">

        <?php
        $querys = "SELECT * FROM `t_sector` ORDER BY Id_sector";
        if ($result = mysqli_query($conn, $querys)) {

            /* fetch associative array */
            while ($row = mysqli_fetch_array($result)) {
           echo '<option type="int" value="'.$row["Id_sector"].'">'.$row["Sector"].'</option>';
    }
        echo " </select>";
      }
      mysqli_free_result($result);
      mysqli_close($conn);
        ?>		
    <br>
      Niv. de materia
        <br>
        <input type="int" name="nivmat">
        <br>
      Niv. de bosque
        <br>
        <input type="int" name="nivbos">
        <br>



        <br>
        <input type="submit" value="Insertar">
      </form>
    </div>
  

 


</body>
</html>
