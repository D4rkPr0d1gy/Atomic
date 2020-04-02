<!DOCTYPE html>
<html lang="es">
<head>
<?php 

require 'assets/head.php'

?>
<style>
   body{
       text-align: center;
   }

    input[type="text"], input[type="password"]{
    outline: none;
    padding: 20px;
    display: block;
    width: 300px;
    border-radius: 3px;
    border: 1px solid #eee;
    margin: 20px auto;
    margin-left: auto;
    background-color: #DEDEDE;
        }

    input[type="submit"]{
        padding: 10px;
        color:#fff;
        background-color: #4FC5EC;
        width: 300px;
        margin: 20px auto;
        margin-top: 0;
        border: 0;
        border-radius: 3px;
        cursor: pointer;
        margin-left: auto;
        margin-right: auto;    
        }

    input[type="submit"]:hover{
    color: #000;
    background-color: #9ED6E0;
        }
    body.dark input[type="submit"]:hover{
    color: #000;
    background-color: #BFC5F8;
        }

    body.dark input[type="submit"]{
            background-color: #9199E6;
        }

    body.dark h1{
        color: #D7D7D7;
    }

    body.dark p{
        color: #D0D0D0;
    }
</style>

</head>
<body>
<header>
<nav>
			<a class="logotipo" href="#">Login Atomic</a>
			<div class="enlaces">
                        <a href="signup.php">Registrate</a>
                        <button type="button" class="switch" id="switch" name="button">
						<span><i class="fas fa-sun"></i></span>
						<span><i class="fas fa-moon"></i></span>
				</button>
			</div>
		</nav>
</header>

<div class="contenedor">

    <?php if(!empty($message)): ?>
      <p><?= $message ?></p>
    <?php endif; ?>
<br>

    <form action="proces.php" method="post">
        <h1>Login</h1>
        <input type="text" name="email" placeholder="Ingresa tu correo">
       
        <input type="password" name="password" placeholder="Ingresa tu contraseña">
        <input type="submit" value="Enviar"><br>
    </form>

    </div>
   

<?php 
require 'assets/script.php'
?>
</body>
</html>