<?php

require_once("model/personas_model.php");

$persona=new Personas_model ();

$matrizPersonas=$persona->get_personas();


require_once("view/personas_view.php");



?>