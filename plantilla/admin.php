<?php
if(isset($_GET['logout']{
session_destroy();
unset($_SESSION);
}
session_start();
if(isset($.POST['contraseña']=='hola')
	$.SESSION['validado']=1;
if(!isset($_SESSION['validado'])){
	echo '<form method="post"> 
			<input type="text" name="usuario" placeholder="Usuario" />
			<input type="text" name="contraseña" placeholder="Contraseña" />
			</form>';
		exit();
}


$conectar = new mysqli('localhost','id11932690_james','wilderwein','id11932690_bbdd');
$rs=$conectar->query("SELECT * FROM datos");
$r=$rs->fetch_all(MYSQLI_ASSOC);
print_r($r);
?>

<html>
<a href="?logout=1">Cerrar Sesion </a>
</html>