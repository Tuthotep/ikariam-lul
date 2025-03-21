<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" type="text/css" href="../styles.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<h1>Sector NorEste Nº5</h1>
<?php 
include '../config.php';
$querys = "SELECT * FROM t_sector WHERE Id_sector = 14";  
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
<h3>Mapa NE5</h3>
<br>
<?php
include '../config.php';
$queryi = "SELECT t_isla.Id_isla, t_isla.Isla FROM t_isla WHERE Idsector = 14 ORDER BY t_isla.Id_isla ASC";  
  $resulti = mysqli_query($conn, $queryi);
  

$dir = array();
$cont = 0;
while ($row = @mysqli_fetch_array($resulti)) {
   $dir[$cont] = $row['Isla'];
   $cont++;?>
   <a href="../viewisla.php?isla=<?php echo $row["Isla"]; ?>">|<?php echo $row["Id_isla"] .'-'. $row["Isla"]?>|</a>

   <?php
}

//--
echo "<br>";
echo "<br>";
$row_cnt = $resulti->num_rows;
echo "Hay $row_cnt islas en db";
echo "<br>";
echo "<br>";
//--
?>





<table style="text-align: center">
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:x-large'>&#8763;</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>68</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>69</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>70</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>71</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>72</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>73</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>74</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>75</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>76</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>77</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>78</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>79</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>80</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>81</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>82</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>83</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:x-large'>&#8763;</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>17</td>
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
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>17</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>18</td>
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
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>18</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>19</td>
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
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>19</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>20</td>
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
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>20</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>21</td>
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
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>21</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>22</td>
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
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>22</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>23</td>
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
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>23</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>24</td>
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
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>24</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>25</td>
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
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>25</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>26</td>
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
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>26</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>27</td>
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
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>27</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>28</td>
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
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>28</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>29</td>
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
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>29</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>30</td>
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
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>30</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>31</td>
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
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>31</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>32</td>
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
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>32</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:x-large'>&#8763;</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>68</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>69</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>70</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>71</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>72</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>73</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>74</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>75</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>76</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>77</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>78</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>79</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>80</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>81</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>82</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>83</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:x-large'>&#8763;</td>
</tr>

</table>
<?php
mysqli_free_result($results);
mysqli_close($conn);
?>

</body>
</html>
