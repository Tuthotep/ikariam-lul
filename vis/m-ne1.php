<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" type="text/css" href="../styles.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<h1>Sector NorEste Nº1</h1>
<?php 
include '../config.php';
$querys = "SELECT * FROM t_sector WHERE Id_sector = 10";  
$results = mysqli_query($conn, $querys);
$rows = mysqli_fetch_array($results, MYSQLI_ASSOC);
$id = $rows['Id_sector'];
$comm = $rows['Comentarios_sector'];
$numislas = $rows['Numislas'];
$sec = $rows['Sector'];
echo"
<br>
<table>
<tr>
<td>Id del sector:</td>
<td>$id</td>
<td></td>
<td>Num. de islas:</td>
<td>$numislas</td>
<td></td>
<td>Comentarios:</td>
<td>$comm</td>
</tr>
</table>
<br>
";
    /* free result set */
    mysqli_free_result($results);
    mysqli_close($conn);
    ?>
<table>
  <tr style="color: black">
    <td width='50' class="vacia">Vacia</td>
    <td width='50' class="nolul">Sin Rep</td>
    <td width='50' class="working">En tarea</td>
    <td width='50' class="done">Hecha</td>
    <td width='50' class="lul">LUL</td>
  </tr>
</table>
<br>
<h3>Mapa NE1</h3>
<br>
<?php
include '../config.php';
$queryi = "SELECT t_isla.Id_isla, t_isla.Isla FROM t_isla WHERE Idsector = 10 ORDER BY t_isla.Id_isla ASC";  
  $resulti = mysqli_query($conn, $queryi);
  

$dir = array();
$cont = 0;
while ($row = @mysqli_fetch_array($resulti)) {
   $dir[$cont] = $row['Isla'];
   $cont++;?>
   <a href="../viewisla.php?isla=<?php echo $row["Isla"]; ?>">|<?php echo $row["Id_isla"] .'-'. $row["Isla"]?>|</a>

   <?php
}

echo "<br>";
//print_r($resulti);

echo "<br>";
$row_cnt = $resulti->num_rows;
echo "Hay $row_cnt islas en db";

echo "<br>";
echo "<br>";
//echo $dir[0];
//echo $dir[1];


?>




<table style="text-align: center">
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:x-large'>&#8763;</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>51</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>52</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>53</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>54</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>55</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>56</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>57</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>58</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>59</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>60</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>61</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>62</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>63</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>64</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>65</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>66</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>67</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:x-large'>&#8763;</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>1</td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>1</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>2</td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>2</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>3</td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>3</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>4</td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>4</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>5</td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>5</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>6</td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>6</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>7</td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>7</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>8</td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>8</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>9</td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>9</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>10</td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[6]; ?>"><?php echo $dir[6]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>10</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>11</td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[1]; ?>"><?php echo $dir[1]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[4]; ?>"><?php echo $dir[4]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>  
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>11</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>12</td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>12</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>13</td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[3]; ?>"><?php echo $dir[3]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[5]; ?>"><?php echo $dir[5]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>13</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>14</td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[2]; ?>"><?php echo $dir[2]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[0]; ?>"><?php echo $dir[0]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>14</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>15</td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>15</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>16</td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>  
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>16</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:x-large'>&#8763;</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>51</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>52</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>53</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>54</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>55</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>56</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>57</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>58</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>59</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>60</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>61</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>62</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>63</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>64</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>65</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>66</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>67</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:x-large'>&#8763;</td>
</tr>

</table>
<?php
mysqli_free_result($results);
mysqli_close($conn);
?>

</body>
</html>
