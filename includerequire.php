<?php
include 'funciones.php';    //include no es tan riguroso, si no encuentra el documento los demas elementos de tu aplicacion seran mostrados
iniciarApp();

require 'funciones.php';    //require es riguroso, si el documento no se encuentra, la aplicacion no lanzara ninguno de sus componentes; si existe podremos usar funciones, clases, metodos de el documento requerido
iniciarApp();

?>