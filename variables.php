<?php

$nombre = "Fernando";
$nombre = "Fernando 2";     //Actualizacion o reasignacion de la variable
echo $nombre;
var_dump($nombre);


define('constante', "Este es el valor de la constante");    //La funcion define crea una constante la cual recibe dos parametros, el primero es el nombre de la constante y el segundo es el valor de la constante
echo constante;     //Constantes se imprimen sin signo de $

const constante2 = "Hola 2";    //Esta es otra forma de crear constantes pero no es tan utilizada en PHP como define
echo constante2;

?>