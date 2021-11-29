<!DOCTYPE>
<html>
    <head>
        <title></title>
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
      $apellido=$_POST['txtapellido'];
      mysqli_query($conexion,"UPDATE informacion set apellido =('$apellido' where nombre='$nombre'")
      or die("Error");
      mysqli_close($conexion);
      echo "datos actualizados";
    ?>
</body>
</html>