DER JAMES </br>
<a href="http://192.168.0.48/Asir2_Kevin/">KEVINASO PEPINASO</a> </br>
<a href="http://192.168.0.37/Asir2_Kimberly/">KIM PUTA AMA</a> </br>

<?php
	if(isset($_GET['email']))
		print_r($_GET);
	
	#SaveSubs
	$f=fopen('suscriptores.txt','a');
	fwrite($f,$_GET['email']."\r\n");
	fclose($f)
?>

<form>
	<input name="email" type="email"/>
	<button>SUBSCRIBE</button>
</form>

