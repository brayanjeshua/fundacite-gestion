<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" href="css/estilos.css">
	<title>Login</title>
	<link rel="stylesheet" href="css/responsive.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="fonts.css">
</head>
<body>
	<div class="contenedor">
	<!--header>
		<h1>Sistema de monitoreo</h1>
	</header-->
		<nav>
			<ul>
			<li><span class="icon-home"></span><a href="index.html">Inicio</a></li>
			<li><span class="icon-book"></span><a href="acerca.html">Acerca De</a></li>
			<li><span class="icon-font" id="lisbeth"></span><a href="http://www.fundacite-merida.gob.ve/" target="_blank">undacite</a></li>
			<li><span class="icon-phone"></span><a href="contacto.html">Contacto</a></li>
			</ul>
		</nav>
		<div class="usuario">
			<h1>INGRESE EL USUARIO DE NODO</h1>
		</div>
	<div class="logeo">
	<?php
		echo '<div class="perfil">';
		echo '</div>';
		echo '<form action="conexion.php" method="POST">';
		echo '<label for="id">Nombre:</label><br>';
		echo '<input type="text" name="nombre" placeholder="Usuario" autofocus>';
		echo '<label for="pass">Contraseña:</label>';
		echo '<input type="password" name="pass" placeholder="Contraseña">';
		echo '<br><input type="submit" value="Acceder">';
		echo '</form>';
	 ?>
	</div>
	<footer class="clear">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda totam vel optio obcaecati consectetur distinctio, ipsam fugiat, debitis id! Reiciendis vel quasi velit dolorum quia consequuntur vitae tempora et accusantium.
			</p>
		</footer>
	</div>
</body>
</html>