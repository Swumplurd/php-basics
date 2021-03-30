<?php

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200
];

// Empty - Revisa si un arreglo esta vacio
var_dump( empty($clientes) );   //Arroja true
var_dump( empty($clientes3) );  //Arroja false
var_dump( empty($clientes2) );  //Arroja true


// Isset - Revisar si un arreglo esta creado o una propiedad esta definida
echo "<br>";
var_dump( isset($clientes4) );      //Arroja false
var_dump( isset($clientes) );       //Arroja true
var_dump( isset($clientes2) );      //Arroja true
var_dump( isset($clientes3) );      //Arroja true

// Isset - permite revisar si una propiedad de un arreglo asociativo, existe!
var_dump( isset($cliente['nombre']) );  //Arroja true
var_dump( isset($cliente['codigo']) );  //Arroja false
?>