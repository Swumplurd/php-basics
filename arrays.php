<?php
$carrito = ['Tablet', 'Television', 'Computadora'];     //Primer forma de crear un arreglo

echo "<pre>";   //la etiqueta pre es muy util para ver de mejor manera los contenidos de un arreglo
var_dump($carrito);
echo "</pre>";

// Acceder a un elemento del array
echo $carrito[1];

// Añade un elemento en el indice 3 del arreglo
$carrito[3] = 'Nuevo Producto...';

// Añadir un elemento nuevo al final...
array_push($carrito, 'Audifonos');

// Añadir al inicio
array_unshift($carrito, 'Smartwatch');

echo "<pre>";
var_dump($carrito);
echo "</pre>";

$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3');   //segunda forma de crear un arreglo
echo "<pre>";
var_dump($clientes);
echo "</pre>";

echo $clientes[1];

?>