<?php

$cliente = [            //Arreglos asociativos muy parecidos a un JSON (Clave => Valor)
    'nombre' => 'Fernando', 
    'saldo' => 200,
    'informacion' => [      //Existe anidacion
        'tipo' => 'delux', 
        'disponible' => 100
    ]
];

echo "<pre>";
var_dump($cliente['informacion']);  //Imprimimos solo la clave requerida, si contiene claves anidadas, tambien las imprime
echo "</pre>";

// echo $cliente['nombre'];         Imprimir una sola clave del arreglo
// echo $cliente['informacion']['disponible'];      Imprimir una clave anidada

$cliente['codigo'] = 1209192012;    //Agrega la nueva clave al arreglo

echo "<pre>";
var_dump($cliente);
echo "</pre>";

?>