<?php
    session_start();

    require 'database.php';

    if( !empty($_POST['email'])  && !empty($_POST['password']) ) {

        $records = $conn->prepare('SELECT id, email, password FROM users WHERE email=:email' ); // Creo el parametro :email y lo asigno en bindParams a la variable
        $records-> bindParam(':email', $_POST['email']);
        $records-> execute();

        $resultados = $records->fetch(PDO::FETCH_ASSOC);

        $message = '';

        if( count($resultados) > 0 && password_verify($_POST['password'], $resultados['password'])) {
            $_SESSION['user_id'] = $resultados['id'];  // Asignamos en memoria en una session llamada 'user id'
            header('Locationn: /Damian/login');
        } else { 
            $message= "Ups, las credenciales no coinciden";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php require 'partials/header.php' ?>

  
    <?php if(!empty($message)): ?> 
        <p><?=$message ?></p>
    <?php endif; ?>
        

    <h1>Ingresar</h1> <span> o <a href="signup.php">Resgistrarse</a></span>

    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="Ingrese su email">
        <input type="password" name="password" placeholder="Ingrese su contraseña">
        <input type="submit" value="enviar">
    </form>

    
</body>
</html>
