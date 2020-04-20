<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<body>
<style>
	* {
		padding:0;
		margin:0;
	}
	body {
		background:#3F3B49;
	}
	.cajita {
		width:100%;
		background-color:#000;
		height:200px;
	}
	.cajita p {
		font-size:1em;
		color:#fff;
		text-align:center;
		display:block;
	}
	.cajita a {
		color:#4D5EB0;	
	}
	.cajita a:hover {
		color:#5DDFE0;
	}

</style>
	
<?php
$nombre = $_POST["nombre"];
$cont = $_POST["pass"];
$cont = md5($cont);
/*echo "Bienvenido".$nombre.", "."su contraseña: ".$cont;*/

		if(!($conexion = mysql_connect("localhost","jeshua"))){
			echo "No se pudo conectar a la base de datos";
			exit();
		}
		else {
			mysql_select_db("monitoreo",$conexion);
			//Query para usuario
			$queryuser = "select nombre from Usuarios";

			$quser = mysql_query($queryuser, $conexion);


			//Query para contraseña
			$querypass = "select pass from Usuarios";

			$qpass = mysql_query($querypass, $conexion);

				$resultuser = mysql_result($quser, 0);
				$resultpass = mysql_result($qpass, 0);
				
				if (($resultuser == $nombre) && ($resultpass == $cont)) {
					echo '¡Logeado!';
					header("location: repetidores.php");
				}
				else {
					/*header("Location:".$_SERVER['HTTP_REFERER']);*/
					header( "refresh:5;url=login.php" );
					echo '<div class="cajita">';
					echo '<p>Login incorrecto</p>';
					echo '<br>';
					echo '<p>Será reedirigido en 5segundos</p>';
					echo '<p><a href="index.html">Volver a inicio</a></p>';
					echo '</div>';
		}
	}

?>
</body>
</html>