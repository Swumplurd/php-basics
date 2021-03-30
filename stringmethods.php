<?php
$nombreCliente = "Fernando Vasquez";

// Conocer la longitud de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

// Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

//Convertirlo a mayusculas
echo strtoupper($nombreCliente);

// Convertirlo en minusculas
echo strtolower($nombreCliente);

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));    //Arroja true
echo str_replace('Fernando', 'F', $nombreCliente);      //Remplazamos Fernando por una F de la variable $nombreCliente

// Revisar si un string existe o no
echo strpos($nombreCliente, 'Pedro');   //Arroja la posicion en donde empieza la string si es que existe o no imprime nada si no existe

$tipoCliente = "Premium";

echo "<br>";

echo "El Cliente " . $nombreCliente . " es " . $tipoCliente;    //Concatenacion con .
echo "El Cliente ${nombreCliente} es ${tipoCliente} ";          //Concatenacion por inyeccion de variable, mas parecida a template string en JS, solo funciona con comillas dobles
?>