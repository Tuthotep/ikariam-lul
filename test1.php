<!DOCTYPE html>
<html lang="es">
<html>
<head>
  <title>IKARIAM LUL WEBDB SITE</title>
  <link rel="icon" type="image/png" href="favicon.ico">
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

  <?php
  include 'config.php';  
  $querys = "SELECT
t_isla.Isla
FROM t_isla
WHERE Idsector = 12";  
  $results = mysqli_query($conn, $querys);

$dir = array();
$cont = 0;
while ($row = @mysqli_fetch_array($results)) {
   $dir[$cont] = $row['Isla'];
   $cont++;
}

print_r($dir);
  
echo $dir[0];
echo $dir[1];

    /* free result set */
    mysqli_free_result($result);
    mysqli_close($conn);


  ?>

</body>
</html>
