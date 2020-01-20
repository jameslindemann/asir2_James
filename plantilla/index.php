<?php

	//conectamos Con el servidor
	$conectar = new mysqli('localhost','id11932690_james','wilderwein','id11932690_bbdd');
	//verificamos la conexion
	if(!$conectar){
		echo"CONEXION FALLIDA";
	}else{

	}
	//recuperar las variables
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	//hacemos la sentencia de sql
	$sql="INSERT INTO datos VALUES('$name',
								   '$email',
								   '$message')";
	//ejecutamos la sentencia de sql
	$ejecutar=$conectar->query($sql);
?>

<!DOCTYPE HTML>
<!--
	Directive by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>InfoTech</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<div id="header">
				<span class="logo icon fa-paper-plane"></span>
				<h1>InfoTech</h1>
				<p>LA INFORMACIÓN MÁS ACTUAL SOBRE EL MUNDO DE LA TECNOLOGÍA Y LA INFORMÁTICA</p>
			</div>

		<!-- Main -->
			<div id="main">

				<header class="major container medium">
					<h2>InfoTech
					<br />
					Un click
					<br />
					y te informo</h2>
					<!--
					<p>Tellus erat mauris ipsum fermentum<br />
					etiam vivamus nunc nibh morbi.</p>
					-->
				</header>

				<div class="box alt container">
					<section class="feature left">
						<a href="#formulario" class="image icon solid fa-signal"><img src="images/pic01.jpg" alt="" /></a>
						<div class="content">
							<h3>El Internet de las Cosas</h3>
							<p>Informate sobre todo lo relacionado con Internet.​​</p>
						</div>
					</section>
					<section class="feature right">
						<a href="#formulario" class="image icon solid fa-code"><img src="images/pic02.jpg" alt="" /></a>
						<div class="content">
							<h3>Programacion</h3>
							<p>Todas las novedades sobre programación.</p>
						</div>
					</section>
					<section class="feature left">
						<a href="#formulario" class="image icon solid fa-mobile-alt"><img src="images/pic03.jpg" alt="" /></a>
						<div class="content">
							<h3>Telefonia Movil</h3>
							<p>Todo sobre el mundo de la telefonia movil.</p>
						</div>
					</section>
				</div>
				<footer class="major container medium">
					<h3>Get shady with science</h3>
					<p>Vitae natoque dictum etiam semper magnis enim feugiat amet curabitur tempor orci penatibus. Tellus erat mauris ipsum fermentum etiam vivamus.</p>
					<ul class="actions special">
						<li><a href="#formulario" class="button">Join our crew</a></li>
					</ul>
				</footer>

			</div>

		<!-- Footer -->
			<div id="footer">
				<div class="container medium">

					<header class="major last">
						<h2>Questions or comments?</h2>
					</header>
					<p>Vitae natoque dictum etiam semper magnis enim feugiat amet curabitur tempor
					orci penatibus. Tellus erat mauris ipsum fermentum etiam vivamus.</p>
					<!-- Formulario -->
					<a name="formulario"/>
					<form method="post" action="#">
						<div class="row">
							<div class="col-6 col-12-mobilep">
								<input type="text" name="name" placeholder="Name" />
							</div>
							<div class="col-6 col-12-mobilep">
								<input type="email" name="email" placeholder="Email" />
							</div>
							<div class="col-12">
								<textarea name="message" placeholder="Message" rows="6"></textarea>
							</div>
							<div class="col-12">
								<ul class="actions special">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</div>
						</div>
					</form>

					<ul class="icons">
						<li><a href="https://twitter.com/jtlk_lindemann" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://github.com/jameslindemann" class="icon brands fa-github"><span class="label">Github</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

				</div>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>