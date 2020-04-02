<?php

session_start();

$server = 'localhost';
$username = 'root';
$password = ''; //Aquí va la contraseña de su servidor
$database = 'login_database'; /* cambie por el nombre de su BD debe ser creada la tabla con 
los siguientes datos 1.- ID tipo INT con un autoincrement Primary 2.- email tipo varchar de 200 3.-password tipo
varchar de 200     */

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>

<?php
if(!empty($_POST['email']) && !empty($_POST['password'])){

    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email=:email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if(count($results) > 0 && password_verify($_POST['password'], $results['password'])){
        $_SESSION['user_id'] = $results['id'];
        header('Location:home.php');
    }else{
        $message = 'Lo sentimos, no ha sido posible validar tu información';
    }
}


?>

