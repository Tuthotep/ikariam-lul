<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="../styles.css">
</head>

<body>
  <?php
  include '../config.php';



$alianza= $_POST['alianza'];
$code = $_POST['code'];
$miembros = $_POST['miembros'];
$coments_a = $_POST['coments_a'];

$aliado = $_POST['aliado'];



    if (isset($_POST['aliado']) )               
        $aliado = 1;  
    else 
        $aliado = 0;  


$guerra = $_POST['guerra'];


    if (isset($_POST['guerra']) )               
        $guerra = 1;  
    else 
        $guerra = 0;  


echo $alianza;
echo $code;
echo $miembros;
echo $coments_a;
echo $aliado;
echo $guerra;



 mysqli_query ($conn,"INSERT into t_alianza (Id_alianza, Alianza, Code, Miembros, Comentarios_ali, Aliado, Guerra)
  values ('0','$alianza','$code','$miembros', '$coments_a', '$aliado', '$guerra' )");


echo "Nueva Alianza con id: " . mysqli_insert_id($conn);

/* close connection */
mysqli_close($conn);

  ?>


</body>
</html>
