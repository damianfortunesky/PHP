<?php
    require('../fpdf/fpdf.php');
    /*Desde localhost*/
    include('../personas_localhost.php');

    $fpdf = new FPDF(); // Instanciamos la clase

    //METODOS


    $fpdf -> AddPage();
    /*
    * AGREGA PAGINA, ADMITE PARAMETROS: orientacion[ PORTRAIT, LANDSCAPE], tamaño[A3, A4, A5, LETTER, LEGAL]
    * Debe haber al menos 1 pagina
    */

    $fpdf -> SetFont('Arial', '', 12);
    /*
    * Recibe tipo[ HELVETICA, ARIAL, TIMES, ETC], estilo[NORMAL, B, I, U], tamaño []
    */


    // ------------------------- EXISTEN 2 METODOS PARA CREAR CONTENIDO EN LA HOJA EN BLANCO ---------------------- //
    $fpdf -> Cell(30, 5, 'texto hola que tal'); 
    /*
    * Recibe alto, ancho, texto, bordes (opcional), ?(nose que es, opcional) , alineacion()opcional, rellenar(opcional), link(opcional)
    *
    * Es la opcion optima para imprimir contenido
    */
    
    $fpdf -> Write(5, 'texto');
    /*
    *  Recible alto y texto 
    *  Añade una linea simulando un p
    */

    // ------------------------------------------------------------------------------------------------------------ //

    $fpdf -> Ln();// CREA UNA LINEA NUEVA


    $fpdf -> Close();  
    $fpdf -> OutPut(); 

    /* Cuando utilizamos output, por defecto, se llama al metodo Close(); 
    *
    *  CUANDO UTILIZAMOS OUTPUT, POR DEFECTO, SE LLAMA A CLOSE(); --> ESTO ES PARA QUE AL MOMENTO DE GENERAR LA SALIDA NO SE PUEDA MODIFICAR EL ARCHIVO
    *  Recibe  destino [I=muestra archivo en navegador, D=descarga, F=guardadentrodelservidor, S=devuelve el archivo como string], nombre_archivo[], [utf8] //  LE DA SALIDA AL NAVEGADOR, SINO SE MUESTRA COMO UN ARCHIVO HTML
    */

    // -------------------------------------- Encabezados: header y footer --------------------------------------- //

    /*
    *  Para utilizarlos necesitamos instanciar la clase. Las config cada bloque es independiente
    *
    *  El operador de objeto , -> se usa en el alcance del objeto para acceder a los métodos y propiedades de un objeto. Es decir que lo que está a la derecha del operador es un miembro del objeto instanciado en la variable del lado izquierdo del operador. Instanciado es el término clave aquí.
    */ 


    class pdf extends header(){  

        public function header(){
            $this -> SetFont();
            $this -> Write();
        }

        public function footer(){
            $this -> SetFont();
            $this -> Write();
        }

    } //Para usarla:
    $fpdf = new pdf();
    $fpdf -> AddPage('portrait', 'letter');

    // VER HEADER --> NETWORK --> SELECCIONAR ARCHIVO --> HEADER
    // Link tutorial https://www.youtube.com/watch?v=kdxDDE3OAYs&list=PLYAyQauAPx8mv6I7SG-4sNGVngclrO6WQ&index=4



?>
