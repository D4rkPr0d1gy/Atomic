<?php 
session_start();

$vars = $_SESSION['user_id'];

		if ($vars == null || $vars = '') {
			header('Location: index.php');
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
				<a href="correo.php">Contacto</a>
				<a href="page.php">Page</a>
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
?>
</body>
</html>