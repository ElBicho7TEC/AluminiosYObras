<?php

$correoElectronico=$_POST["correoElectronico"];
$contrasena=$_POST["contrasena"];

//buscar esos datos en la base de datos
include("conexionBD.php");
$consulta="select * from login where correoElectronico='$correoElectronico'
         and contrasena='$contrasena'";
		 
		 $resultado=mysqli_query($conexion,$consulta);
		 if($fila=mysqli_fetch_array($resultado)){
			 //iniciar sesion
			 session_start();
			 $_SESSION['correoElectronico']=$fila['correoElectronico'];
			 header("Location: indiceadmi.php");
		 }else{
			 header("Location: sesion.php");
		 }
		 	 


?>