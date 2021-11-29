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
      $consulta=mysqli_query($conexion,"SELECT * from informacion")or die ("erorr");
      echo'<table border="1">';
      echo'<tr>';
      echo'<th id="nombre">nombre</th>';
      echo'<th id="apellido">apellido</th>';
      echo'<th id="grupo">grupo</th>';
      echo'<th id="correo_electronico">correo</th>';
      echo'<th id="comentario">comentario</th>';
      echo'</tr>';
      while($extraido=mysqli_fetch_array($consulta))
      {
          echo'<tr>';
          echo'<td>'.$extraido['nombre'].'</td>';
          echo'<td>'.$extraido['apellido'].'</td>';
          echo'<td>'.$extraido['grupo'].'</td>';
          echo'<td>'.$extraido['correo_electronico'].'</td>';
          echo'<td>'.$extraido['comentario'].'</td>';
          echo'</tr>';
      }
      mysqli_close($conexion);
      echo'</table>'
    ?>
</body>
</html>