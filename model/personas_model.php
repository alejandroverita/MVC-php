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

    $consulta=$this->db->query("SELECT * FROM datos_usuarios");

    //FETCH ASSOC para leer un array asociativo
    while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

        //recorre las filas del array consultas
        $this->personas[]=$filas;
    }

    return $this->personas;

}

}
