<?php

class Personas_model{

//variables encapsuldas
private $db;
private $personas;

public function __construct() {

    //conectar con BBDD
    require_once("model/conectar.php");

    //especificar la variable donde quiero almacenar la conexion que nos va a devolver el metodo
    $this->db=conectar::conexion();

    //definiendo la variable productos como array
    $this->personas=array();
}

public function get_personas(){

    //conectar con archivo paginacion para traer la sentencia del tamaño de las paginas
    require ("paginacion.php");

    $consulta=$this->db->query("SELECT * FROM datos_usuarios LIMIT $empezar_desde, $tamagno_paginas");

    //FETCH ASSOC para leer un array asociativo
    while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

        //recorre las filas del array consultas
        $this->personas[]=$filas;
    }

    return $this->personas;

}

}
