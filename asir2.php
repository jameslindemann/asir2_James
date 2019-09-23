DER JAMES </br>
<a href="http://192.168.0.34/asir2.php">KEVINASO PEPINASO</a> </br>
<a href="http://192.168.0.37/Asir2.php">KIM PUTA AMA</a>

<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f)
?>
