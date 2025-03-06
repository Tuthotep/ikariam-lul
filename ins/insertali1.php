<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" href="../styles.css">
</head>

<body>

    <div>
      <h1>Insertar Alianza</h1>
      <br>
      <form method="POST" action="../ins/insertali2.php">
        Alianza
        <br>
        <input type="text" name="alianza"><br>
        Code
        <br>
        <input type="text" name="code"><br>
        Miembros
        <br>
        <input type="int" name="miembros"><br>
        Comentarios
        <br>
        <input type="text" name="coments_a"><br>
        Aliado
        <br>
        <input type="checkbox" name="aliado" value="0"><br>
         En guerra
        <br>
        <input type="checkbox" name="guerra" value="0"><br>
        <br>
        <input type="submit" value="Insertar">
      </form>
    </div>
  
 </body>
</html>
