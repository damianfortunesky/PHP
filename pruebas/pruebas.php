<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas</title>
</head>
<body>
    <?php
        $array = array("a","b","c","d","e","f");

        //echo $array[i]; // [indica posicion de elemento, es el indice]
        
    ?>
    
    <?php
       $fecha = getdate(); 

       //Crea este array --> array(11) { ["seconds"]=> int(54) ["minutes"]=> int(56) ["hours"]=> int(15) ["mday"]=> int(15) ["wday"]=> int(4) ["mon"]=> int(9) ["year"]=> int(2022) ["yday"]=> int(257) ["weekday"]=> string(8) "Thursday" ["month"]=> string(9) "September" [0]=> int(1663250214) }

       //var_dump($fecha)
    ?>

    <!-- <h1><?php //echo $fecha['mday']?></h1> Indica el dia -->
    <!-- <h1><?php //echo $fecha['mon']?></h1> Indica el mes -->
    <!-- <h1><?php //echo $fecha['year']?></h1> Indica el año --> 

    <!-- <h1> La fecha es <?php //echo $fecha['mday']?>-<?php //echo $fecha['mon']?>-<?php //echo $fecha['year']?> </h1> -->

    <!-- <h1> La fecha es: <?php //echo $fecha['mday']."-".$fecha['mon']."-". $fecha['year'] ?> </h1> -->


    <?php
       //FUNCIONES

       $num = 500;

       function nombreFuncion(&$num) {
        $num+=500;
       }

       nombreFuncion($num);
      
       echo $num;
    ?>
 



</body>
</html>