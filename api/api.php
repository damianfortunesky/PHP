<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- API: APPLICATION PROGRAMING INTERFACE: Es un app que funciona de mediador entre un cliente y un servidor a traves de , solicitud-respuesta


    Como se utilizan las API en internet: a traves del protocolo HTTP (Sirve para trasmitir informacion a traves de peticiones y respuestas)

    Se definio un estandar para hacerlo mas uniforme:

        1. Incluir el verbo HTTP
        2. URL (define la pagina o direccion web a la que queremos enviarle nuestros datos)
        3. La respuesta incluye un codigo obligatorio, especifica la accion del servidor en base a nuestra solicitud 

    API REST: Que es? Es un tipo de API que se basa en recursos, entendemos recursos por el modelo de la aplicacion 

    OPERACION CRUD EN API REST:  

        CREATE: POST
        READ:   GET
        UPDATE: PATH/PUT  [PATH ES PARA REALIZAR UN MODIFICACION ESPECIFICA Y PUT PARA REEMPLAZAR EN SU TOTALIDAD]
        DELETE: DELETE


    Que es un API Key: Es un clave que nos permite integrar un software que es de terceros, con esta clave se autentica el usuario para el uso del servicio

-->

<?php
    // Creo f(x) 
    function API($ruta) {
        $url ="http://localhost:3002/api/"; // url api

        $respuesta = $url . $ruta;  // url + directorio que le enviemos

        return $respuesta; // Retornamos para saber la respuesta
    }

    $datosAPI = API("movies");  // Llamo a la f(x) creada

    $json = file_get_contents($datosAPI); // Almacena Json en espacio de memoria

    $datosArray = json_decode($json, true); // Convierte el json a array

    print_r($datosArray);
?>

        <h1>Consumir API</h1>



</body>
</html>