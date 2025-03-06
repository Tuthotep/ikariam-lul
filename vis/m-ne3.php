<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" type="text/css" href="../styles.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<h1>Sector NorEste Nº3</h1>
<?php 
include '../config.php';
$querys = "SELECT * FROM t_sector WHERE Id_sector = 12";  
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


<h3>Mapa NE3</h3>
<br>
<?php
include '../config.php';
$queryi = "SELECT
t_isla.Isla
FROM t_isla
WHERE Idsector = 12";  
  $resulti = mysqli_query($conn, $queryi);

$dir = array();
$cont = 0;
while ($row = @mysqli_fetch_array($resulti)) {
   $dir[$cont] = $row['Isla'];
   $cont++;
}

//print_r($dir);
  
//echo $dir[0];
//echo $dir[1];


?>




<table style="text-align: center">
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:x-large'>&#8763;</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>84</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>85</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>86</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>87</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>88</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>89</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>90</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>91</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>92</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>93</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>94</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>95</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>96</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>97</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>98</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>99</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>100</td>
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
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[22]; ?>"><?php echo $dir[22]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[23]; ?>"><?php echo $dir[23]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[24]; ?>"><?php echo $dir[24]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[25]; ?>"><?php echo $dir[25]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[26]; ?>"><?php echo $dir[26]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[27]; ?>"><?php echo $dir[27]; ?></a></td>
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
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[32]; ?>"><?php echo $dir[32]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[28]; ?>"><?php echo $dir[28]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[29]; ?>"><?php echo $dir[29]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[30]; ?>"><?php echo $dir[30]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[31]; ?>"><?php echo $dir[31]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[33]; ?>"><?php echo $dir[33]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[34]; ?>"><?php echo $dir[34]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[35]; ?>"><?php echo $dir[35]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>2</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>3</td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[36]; ?>"><?php echo $dir[36]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[16]; ?>"><?php echo $dir[16]; ?></a></td> 
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[37]; ?>"><?php echo $dir[37]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[38]; ?>"><?php echo $dir[38]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[39]; ?>"><?php echo $dir[39]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[40]; ?>"><?php echo $dir[40]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[41]; ?>"><?php echo $dir[41]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>3</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>4</td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[53]; ?>"><?php echo $dir[53]; ?></a></td> 
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[54]; ?>"><?php echo $dir[54]; ?></a></td> 
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[55]; ?>"><?php echo $dir[55]; ?></a></td> 
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[17]; ?>"><?php echo $dir[17]; ?></a></td> 
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[56]; ?>"><?php echo $dir[56]; ?></a></td> 
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[57]; ?>"><?php echo $dir[57]; ?></a></td> 
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[58]; ?>"><?php echo $dir[58]; ?></a></td> 
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[59]; ?>"><?php echo $dir[59]; ?></a></td> 
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[60]; ?>"><?php echo $dir[60]; ?></a></td> 
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>4</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>5</td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[61]; ?>"><?php echo $dir[61]; ?></a></td> 
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[62]; ?>"><?php echo $dir[62]; ?></a></td> 
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[63]; ?>"><?php echo $dir[63]; ?></a></td> 
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[64]; ?>"><?php echo $dir[64]; ?></a></td> 
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[65]; ?>"><?php echo $dir[65]; ?></a></td> 
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[66]; ?>"><?php echo $dir[66]; ?></a></td> 
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[67]; ?>"><?php echo $dir[67]; ?></a></td> 
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[68]; ?>"><?php echo $dir[68]; ?></a></td> 
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[69]; ?>"><?php echo $dir[69]; ?></a></td> 
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[70]; ?>"><?php echo $dir[70]; ?></a></td> 
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>5</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>6</td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[87]; ?>"><?php echo $dir[87]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[88]; ?>"><?php echo $dir[88]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[89]; ?>"><?php echo $dir[89]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[90]; ?>"><?php echo $dir[90]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[91]; ?>"><?php echo $dir[91]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[92]; ?>"><?php echo $dir[92]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[93]; ?>"><?php echo $dir[93]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[94]; ?>"><?php echo $dir[94]; ?></a></td>
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
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[101]; ?>"><?php echo $dir[101]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[102]; ?>"><?php echo $dir[102]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[103]; ?>"><?php echo $dir[103]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[104]; ?>"><?php echo $dir[104]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[105]; ?>"><?php echo $dir[105]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[107]; ?>"><?php echo $dir[107]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[108]; ?>"><?php echo $dir[108]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[106]; ?>"><?php echo $dir[106]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>7</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>8</td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[109]; ?>"><?php echo $dir[109]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[110]; ?>"><?php echo $dir[110]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[111]; ?>"><?php echo $dir[111]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[112]; ?>"><?php echo $dir[112]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[113]; ?>"><?php echo $dir[113]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[114]; ?>"><?php echo $dir[114]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[115]; ?>"><?php echo $dir[115]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[116]; ?>"><?php echo $dir[116]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[117]; ?>"><?php echo $dir[117]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[118]; ?>"><?php echo $dir[118]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[119]; ?>"><?php echo $dir[119]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[120]; ?>"><?php echo $dir[120]; ?></a></td>
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
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[95]; ?>"><?php echo $dir[95]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[96]; ?>"><?php echo $dir[96]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[97]; ?>"><?php echo $dir[97]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[98]; ?>"><?php echo $dir[98]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[99]; ?>"><?php echo $dir[99]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[100]; ?>"><?php echo $dir[100]; ?></a></td> 
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>9</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>10</td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[121]; ?>"><?php echo $dir[121]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[122]; ?>"><?php echo $dir[122]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[123]; ?>"><?php echo $dir[123]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[124]; ?>"><?php echo $dir[124]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[125]; ?>"><?php echo $dir[125]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[126]; ?>"><?php echo $dir[126]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[127]; ?>"><?php echo $dir[127]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>10</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>11</td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[128]; ?>"><?php echo $dir[128]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[129]; ?>"><?php echo $dir[129]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[130]; ?>"><?php echo $dir[130]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[131]; ?>"><?php echo $dir[131]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[132]; ?>"><?php echo $dir[132]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[133]; ?>"><?php echo $dir[133]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[134]; ?>"><?php echo $dir[134]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[135]; ?>"><?php echo $dir[135]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[136]; ?>"><?php echo $dir[136]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[137]; ?>"><?php echo $dir[137]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[138]; ?>"><?php echo $dir[138]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[139]; ?>"><?php echo $dir[139]; ?></a></td>
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
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[80]; ?>"><?php echo $dir[80]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[81]; ?>"><?php echo $dir[81]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[82]; ?>"><?php echo $dir[82]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[83]; ?>"><?php echo $dir[83]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[84]; ?>"><?php echo $dir[84]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[85]; ?>"><?php echo $dir[85]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[86]; ?>"><?php echo $dir[86]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[44]; ?>"><?php echo $dir[44]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[42]; ?>"><?php echo $dir[42]; ?></a></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>12</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>13</td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[71]; ?>"><?php echo $dir[71]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[72]; ?>"><?php echo $dir[72]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[73]; ?>"><?php echo $dir[73]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[74]; ?>"><?php echo $dir[74]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[75]; ?>"><?php echo $dir[75]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[76]; ?>"><?php echo $dir[76]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[77]; ?>"><?php echo $dir[77]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[78]; ?>"><?php echo $dir[78]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[79]; ?>"><?php echo $dir[79]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[45]; ?>"><?php echo $dir[45]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[43]; ?>"><?php echo $dir[43]; ?></a></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>13</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>14</td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[46]; ?>"><?php echo $dir[46]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[47]; ?>"><?php echo $dir[47]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[48]; ?>"><?php echo $dir[48]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[49]; ?>"><?php echo $dir[49]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[50]; ?>"><?php echo $dir[50]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[51]; ?>"><?php echo $dir[51]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[52]; ?>"><?php echo $dir[52]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
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
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[18]; ?>"><?php echo $dir[18]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[19]; ?>"><?php echo $dir[19]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[20]; ?>"><?php echo $dir[20]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[21]; ?>"><?php echo $dir[21]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[1]; ?>"><?php echo $dir[1]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[0]; ?>"><?php echo $dir[0]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>15</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>16</td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[2]; ?>"><?php echo $dir[2]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[3]; ?>"><?php echo $dir[3]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[4]; ?>"><?php echo $dir[4]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[5]; ?>"><?php echo $dir[5]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[6]; ?>"><?php echo $dir[6]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[7]; ?>"><?php echo $dir[7]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[8]; ?>"><?php echo $dir[8]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[9]; ?>"><?php echo $dir[9]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[10]; ?>"><?php echo $dir[10]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[11]; ?>"><?php echo $dir[11]; ?></a></td>
<td width='50' style='font-weight: bold'><img src="../img/mar.png"></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[12]; ?>"><?php echo $dir[12]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[13]; ?>"><?php echo $dir[13]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[14]; ?>"><?php echo $dir[14]; ?></a></td>
<td width='50' style='font-weight: bold'><a href="../viewisla.php?isla=<?php echo $dir[15]; ?>"><?php echo $dir[15]; ?></a></td>     
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>16</td>
</tr>
<tr>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:x-large'>&#8763;</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>84</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>85</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>86</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>87</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>88</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>89</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>90</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>91</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>92</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>93</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>94</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>95</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>96</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>97</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>98</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>99</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:large'>100</td>
<td width='50' style='font-weight: bold;color:chartreuse;font-size:x-large'>&#8763;</td>
</tr>

</table>
<?php
mysqli_free_result($results);
mysqli_close($conn);
?>

</body>
</html>
