<?php

class Productos_modelo{

//variables encapsuldas
private $db;
private $productos;

public function __construct() {

    //conectar con BBDD
    require_once("model/conectar.php");

    //especificar la variable donde quiero almacenar la conexion que nos va a devolver el metodo
    $this->db=conectar::conexion();

    //definiendo la variable productos como array
    $this->productos=array();
}

public function get_productos(){

    $consulta=$this->db->query("SELECT * FROM PRODUCTOS");

    //FETCH ASSOC para leer un array asociativo
    while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

        //recorre las filas del array consultas
        $this->productos[]=$filas;
    }

    return $this->productos;

}

}







?>