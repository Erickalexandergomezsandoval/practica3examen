<!DOCTYPE>
<html >
<head>
<link href="estilos.css" rel="stylesheet">
    <title>Formulario</title>
</head>
<body>
    <h1 align="center">Fomrulario</h1>
    <div id="tabla1">
        <h1 align="center">Constesta lo que se te pide </h1>
</div>
       <div id="tabla1"> 
           <form  align="center"action="guardar.php" method="POST">
  nombre : <input type ="text" name="txtnombre">
  <br>
    apellido:<input type ="text" name="txtapellido">
    <br>
    grupo:<select name="cmbsexo"> 
        <option value="5-J">5-J </option>
        <option value="5-K ">5-K </option>
        <option value="5-L">5-L </option>
        <option value="5-M ">5-M </option>
        <option value="5-N">5-N </option>
        <option value="5-O ">5-O </option>
        <option value="5-P">5-P </option>
        <option value="5-Q">5-Q </option>
        <option value="5-R">5-R </option>
        <option value="5-S ">5-S </option>
        <option value="5-T">5-T </option>
        <option value="5-U">5-U </option>
        <option value="5-V">5-V </option>
        <option value="5-W">5-W </option>
        <option value="5-X">5-X </option>
        <br>
        <br>
        correo_electronico:<input type="email"  name="emailcorreo_electronico" placeholder="correo">
        <br>
        matricula:<input type ="number" name="numatricula">
        <br>
        contraseña:<input type="password" naem="contraseña">
        <br>
        comentario:<input type ="text" name="txtcomentario">
        <br>
        <input type="submit" value="registrar" name="btnregistrar">
    </select>
     </form>
</div>
<div id="tabla1">
<form align="center"action="eliminar.php" method="POST">
     nombre : <input type ="text" name="txtnombre">
     <br>
     <input type="submit" value="Eliminar registro" name="btnEliminar">
     </form>
</div>
   <div id="tabla1">
   <p align="center">selecciones el nombre al que desea actualizar apellido</p>
      <form align="center"action="actualizar.php" method="POST">
      nombre : <input type ="text" name="txtnombre">
      apellido:<input type ="text" name="txtapellido">
    <input type="submit" value="Actualizar registro" name="btnActualizar">
</form>
   </div>
    <div id="tabla1">
<p align="center">click aki pare ver los registros</p>
<form align="center"action="registros.php" method="POST">
<input type="submit" value="Ver Registros " name="btnRegistros">
</form>
</div>   
        
</body>
</html>