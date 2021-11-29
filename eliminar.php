<!DOCTYPE>
<html>
    <head>
        <title>Eliminar</title>
</head>
<body>
    <?php
     $server="localhost";
     $usuario="root";
     $contraseña="";
     $bd="historial";
     $conexion=mysqli_connect($server,$usuario,$contraseña,$bd)
      or die ("errror");
      $nombre=$_POST['txtnombre'];
      mysqli_query($conexion,"DELETE from informacion where nombre='$nombre'")
      or die("Error al eliminar ");
      mysqli_close($conexion);
      echo("datos eliminadooooooooooooosssss");
    ?>
</body>

</html>
