<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<?php

require("model/paginacion.php");

?>

<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>

<form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   

		<?php
    foreach($matrizPersonas as $persona):?>

   	<tr>
      <td> <?php echo $persona["ID"]?></td>
      <td> <?php echo $persona["NOMBRE"]?></td>
      <td> <?php echo $persona["APELLIDO"]?></td>
      <td> <?php echo $persona["DIRECCION"]?></td>

<!-- pasando id por la url con ?nombre=valor- abrir php y pasarle que me escriba en la url el propiedad del objeto persona que se encuente evaluando el id -->

      <td class="bot"><a href="borrar.php?id=<?php echo $persona["ID"]?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
      <td class='bot'><a href="editar.php?id=<?php echo $persona["ID"]?> & nom=<?php echo $persona["NOMBRE"]?> & ape=<?php echo $persona["APELLIDO"]?> & dir= <?php echo $persona["DIRECCION"]?>">
      <input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr> 

    <?php
    endforeach;
    ?>


	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
      <tr><td colspan="4"><?php
//-------------------------------PAGINACION-------------------------

$ant = $pagina - 1;
$sig = $pagina + 1;
if ($pagina > 1) { //Colocar anterior si la página es mayor a 1
  echo "<a href='?pagina=$ant'> Anterior </a>";
}
for ($i = 1; $i <= $total_paginas; $i++) {

  echo "<a href='?pagina= $i'>" . $i . "</a>  "; //Mandamos el valor de i a la misma página
}
if ($pagina < $total_paginas) { //Colocar siguiente siempre y cuando la página sea menor al número total de páginas
  echo "<a href='?pagina=$sig'> Siguiente </a>";
}

?>           
Pag. <?php echo " " . $pagina . " / " . $total_paginas?></td></tr>
  </table>
</form>





</table>
</body>
</html>