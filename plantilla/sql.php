<?php
	//conectamos Con el servidor
	$conectar = new mysqli('localhost','id11932690_james','wilderwein','id11932690_bbdd');
	//verificamos la conexion
	if(!$conectar){
		echo"CONEXION FALLIDA";
	}else{

	}
	
	//hacemos la sentencia de sql
	$sql="SELECT * FROM `datos`";
	//ejecutamos la sentencia de sql
	$r=$conectar->query($sql)->fetch_all();
	echo'<pre>';
	print_r($r);
	echo'</pre>';
	
?>