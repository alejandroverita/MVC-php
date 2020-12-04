 <?php

require_once("model/productos_model.php");

$producto=new Productos_modelo ();

$matrizProductos=$producto->get_productos();


require_once("view/productos_view.php");



?>