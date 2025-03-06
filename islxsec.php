<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="styles.css">
</head>

<body>
<h3>Islas del sector dado.</h3>
      <br>


<form name="alixjug" method="post"action="islxsecr.php">


<select name="sector">

<option value="0">Seleccione:</option>

    

<?php
include 'config.php';


$conn;

$query = "SELECT * FROM `t_sector` ORDER BY Sector";

if ($result = mysqli_query($conn, $query)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_array($result)) {


                       
    echo '<option type="text" value="'.$row["Id_sector"].'">'.$row["Sector"].'</option>';


}
  
echo "</select>";
echo "<br>";


echo "<p><input type=submit value=Enviar /></p><br></form>"; 




    /* free result set */
    mysqli_free_result($result);
}



/* close connection */
mysqli_close($conn);
?>

</body>
</html>