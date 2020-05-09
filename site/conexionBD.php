<?php
//esto es para conectar la base de datos en la pagina web
    $usuariobd="root";
    $host="localhost";
    $clave="root";
    $basededatos="bdaluminiosyobras";
    $conexion=mysqli_connect($host,$usuariobd,$clave,$basededatos)
	or die("No se pudo conectar al servidor.");
?>