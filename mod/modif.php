<!DOCTYPE html>
<html lang="es">
<html>
<head>

  <title>IKARIAM LUL WEBDB SITE</title>
  <link rel="icon" type="image/png" href="favicon.ico">
  <link rel="stylesheet" type="text/css" href="../styles.css">
<?php
include '../config.php';
?>
</head>
<body>

<form method="POST" action="../mod/modsec.php">
<table>
  <tr>
    <td>Sector</td>
    <td>
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
    </td>
    <td><input type="submit" value="Enviar"></td>
   </tr>
</table>
</form>

<br>


  <form method="POST" action="../mod/modisl.php">
  <table>

  <tr>
 
    <td>Isla</td>
    <td>
    <select name="isla">
    <?php
$queryi = "SELECT * FROM `t_isla` ORDER BY Isla";
if ($resulti = mysqli_query($conn, $queryi)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_array($resulti)) {
   echo '<option type="int" value="'.$row["Id_isla"].'">'.$row["Isla"].'</option>';
}
echo " </select>";
}
mysqli_free_result($resulti);
mysqli_close($conn);
?>	
    </td>
    <td><input type="submit" value="Enviar"></td>
   </tr>
 
  </table>
  </form>
  
  <br>
  <form method="POST" action="../mod/modciu.php">
  <table>

  <tr>
 
    <td>Ciudad</td>
    <td>
    <select name="ciudad">
      <?php
$queryc = "SELECT * FROM `t_ciudad` ORDER BY Ciudad";
if ($result = mysqli_query($conn, $queryc)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_array($result)) {
   echo '<option type="int" value="'.$row["Id_ciudad"].'">'.$row["Ciudad"].'</option>';
}
echo " </select>";
}
mysqli_free_result($result);
mysqli_close($conn);
?>	
</td>
    <td><input type="submit" value="Enviar"></td>
    
  </tr>
    </table>
    </form>
    <br>
    <form method="POST" action="../mod/modjug.php">
    <table>

  <tr>

    <td>Jugador</td>
    <td>
    <select name="jugador">
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
mysqli_close($conn);
?>	
</td>
    <td><input type="submit" value="Enviar"></td>
      </tr>

  </table>
  </form>
  <br>
  <form method="POST" action="../mod/modali.php">
  <table>
  
  <tr>
 
    <td>Alianza</td>
    <td>
    <select name="alianza">
      <?php
$querya = "SELECT * FROM `t_alianza` ORDER BY Alianza";
if ($result = mysqli_query($conn, $querya)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_array($result)) {
   echo '<option type="int" value="'.$row["Id_alianza"].'">'.$row["Alianza"].'</option>';
}
echo " </select>";
}
mysqli_free_result($result);
mysqli_close($conn);
?>	
</td>
    <td><input type="submit" value="Enviar"></td>
  
  </tr>

</table>
</form>

</body>
</html>
