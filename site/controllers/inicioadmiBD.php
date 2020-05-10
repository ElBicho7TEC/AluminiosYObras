<?php
$mensajewelcome=$_POST["mensajewelcome"];
$subtitulo=$_POST["subtitulo"];  
$descripcion=$_POST["descripcion"];
include("../controllers/conexionBD.php");

$cadenaInserta="insert into bienvenida (mensajewelcome, subtitulo, descripcion)".
         "values('$mensajewelcome', '$subtitulo' ,'$descripcion')";

				mysqli_query($conexion,$cadenaInserta) //asi para conectar la base de datos
				or die("error al insertar en la tabla bienvenida.");
				header ("Location: ../views/inicioadmi.php");//busca ese archivo
				

?>
<!--- despues del get es el nombre que se le puso name="el nombre"-->






