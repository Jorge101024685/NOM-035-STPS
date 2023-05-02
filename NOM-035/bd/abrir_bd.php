<?php
    $usuario = "root";
	$password = "";
	$servidor = "localhost";
	$bdatos = "sistema035";
	$tabla='empresa';
	$tabla1='cuestionario1';
	$tabla2='cuestionario2';
	$tabla3='cuestionario3';
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, $password,$bdatos) or die ("No se ha podido conectar al servidor de Base de datos");
?>	