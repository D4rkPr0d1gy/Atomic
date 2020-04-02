<?php //Aquí es donde hago todo lo relacionado con la BD

session_start(); 

$server = 'localhost';
$username = 'root';
$password = 'TheDarkProdigy78'; //Aquí va la contraseña de su servidor
$database = 'login_database'; /* Este es el nombre de mi BD, tal cual la tengo en el PhpMyAdmin  */

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
        header('Location: error-login.php');
    }
} 


?>

