<?php
                              
// While

$i = 0; // Inicializador

while($i < 10) {
    echo $i . "<br>";
    $i++; // Incremento
}

echo "<br>";

// Do While
$i = 100;

do {
    echo $i . "<br>";
    $i++;
} while($i < 10);

// For Each
$clientes = array('Pedro', 'Fernando', 'Karen');

foreach( $clientes as $cliente ):       //Se puede utilizar : en lugar de {
    echo $cliente . '<br/>';
endforeach;                             //Si se usa : se debe usar endforeach

/* existe tambien endfor endif endwhile */
/* elseif NO tiene un endelseif tampco existe endelse*/

$cliente = [
    'nombre' => 'Fernando',
    'saldo' => 200,
    'tipo' => 'Delux'
];

foreach( $cliente as $key => $valor ):      //Podemos iterar tanto las claves como los valores
    echo $key . " - " . $valor . '<br/>';
endforeach;
?>