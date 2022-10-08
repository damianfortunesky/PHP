<?php
    require 'database.php';

    $message ='';

    // Si los campos que estoy recibiendo a traves del metodo POST no estan vacios 

    if(!empty($_POST['email']) && !empty($_POST['password']) ){
        $sql = "INSERT INTO users (email, password) VALUES (:email, :password)"; //:email es para luego asignarle la variable en bindParams

        // Se llama asi por statement = declaracion
        $stmt = $conn->prepare($sql);               // Prepare sirve para ejecutar la consulta sql  

        $stmt->bindParam(':email', $_POST['email']);

        $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Cifra contraseña 
        $stmt->bindParam(':password', $password);

        if($stmt->execute()){
            $message = 'Usuario creado con exito';
        } else {
            $message = 'Error al crear usuario';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php require 'partials/header.php' ?>

<?php
// <?= es igual a  <?php echo 
?>

    <?php if(!empty($message)): ?> 
        <p><?=$message ?></p>
    <?php endif; ?>


    <h1>Registrarse</h1> <span> o <a href="login.php">Ingresar</a></span> 


    <!-- Envio datos por POST a traves del atributo name -->
    <form action="signup.php" method="post">
        <input type="text" name="email" placeholder="Ingrese su email"> 

        <input type="password" name="password" placeholder="Ingrese su contraseña">
        <input type="password" name="confirm_password" placeholder="Confirme su contraseña">
        
        <input type="submit" value="enviar">
    </form>
</body>
</html>