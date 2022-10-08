<?php
    $host = 'localhost'; // ruta a la base de datos, en este caso en localhost o 127.0.0.1 (es lo mismo)

    $db = 'attendance_db'; // Nombre base de datos

    $user ='root'; // Credencial a base de datos, en este caso es root 

    $pass = ''; // Credencial a base de datos, en este caso no tiene

    $charset = 'utf8mb4'; // Tipo de caracteres

    $dsn = "mysql:host=$host; dbname=$db; charset=$charset"; // Query

    try {
        $pdo = new PDO($dsn, $user, $pass); //(host, nombreBaseDatos, 

        //$pdo = setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        throw new PDOException($e->getMessage());   
    }

    require_once 'crud.php';

    $crud = new crud($pdo);
 
?>