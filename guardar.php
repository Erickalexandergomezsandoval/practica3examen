<!DOCTYPE>
<html>
    <head>
        <title>guardar</title>
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
    $grupo=$_POST['cmbsexo'];
    $correo_electronico=$_POST['emailcorreo_electronico'];
    $matricula=$_POST['numatricula'];
    $comentario=$_POST['txtcomentario'];

    $insertar ="INSERT INTO informacion values('$nombre','$apellido','$grupo','$correo_electronico','$matricula','$comentario')";
    $resultado=mysqli_query($conexion,$insertar)
    or die ("error");
    mysqli_close($conexion);
    echo "los datos se registraron , para verficar ,regrese al formulario y de click en revisar registros ";
    ?>
</body>
    </html>