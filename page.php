<?php 
session_start();

$vars = $_SESSION['user_id'];


if ($vars == null || $vars = '') {
	echo 'Usted no tiene autorización';
	die();
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
<?php 

require 'assets/head.php'

?>

</head>
<body>
<header>
<nav>
			<a class="logotipo" href="#">Atomic</a>
			<div class="enlaces">
				<a href="#">Contacto</a>
				<a href="home.php">Inicio</a>
				<a href="logout.php">Salir</a>
				<button type="button" class="switch" id="switch" name="button">
						<span><i class="fas fa-sun"></i></span>
						<span><i class="fas fa-moon"></i></span>
				</button>
			</div>
		</nav>
</header>
<div class="contenedor">
	

		
	</div>

	<?php 

require 'assets/script.php'

?></body>
</html>