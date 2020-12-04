<?php

//-------------------------PAGINACION------------------------

require_once("conectar.php");

//variable para guardar conexion

$base=conectar::conexion();

$tamagno_paginas=3;

//Ejecuta bloque si es que se ha pasado parametro "pagina por la URL
if (isset ($_GET["pagina"])) {
    if ($_GET["pagina"]==1) {

        header ("Location:index.php");
    } 
    else {
        $pagina=$_GET["pagina"]; //guardar temporalmente el numero de la pagina es esa variable
    }
} 
else {
    //Variable para mostrar el numero de pagina donde nos encontramos
    $pagina=1;
}

$empezar_desde=($pagina-1)*$tamagno_paginas;

//sentencia SQL que devuelve registros de BBDD. Saber cuantos regisros nos devuelve la consulta
$sql_total="SELECT * FROM DATOS_USUARIOS";

//Sentencia preparada que devuelve todos los registros selecionados
$resultado=$base->prepare($sql_total);

$resultado->execute(array());

//cuantos rergistros nos devuelve consulta sql

$num_filas=$resultado->rowCount(); //cuenta filas que tengo dentro del array

//averiguar cuantas paginas va a tener nuestra paginacion
$total_paginas=ceil($num_filas/$tamagno_paginas); //evuelve redonder el numero la funcion CEIL


?>