<?php

/* Los condicionales son iguales a otros lenguajes */

$autenticado = true;
$admin = false;

if($autenticado && $admin ) {
    echo "Usuario autenticado correctamente <br>";
} else {
    echo "Usuario no autenticado, inicia sesión <br>";
}

// If anidados...
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'Regular'
    ]
];

echo "<br>";

if( !empty($cliente) ) {
    echo "El Arreglo de cliente no esta vacio <br>";

    if($cliente['saldo'] > 0) {
        echo "El Cliente tiene saldo disponible <br>";
    } else {
        echo "No hay saldo <br>";
    }
}

echo "<br>";

// else if
if($cliente['saldo'] > 0 ) {
    echo "El Cliente tiene saldo <br>";
} else if ($cliente['informacion']['tipo'] === 'Premium') {
    echo "El Cliente es Premium <br>";
} else {
    echo "No hay cliente definido o no tiene saldo o no es premium <br>";
}

// Switch.

echo "<br>";

$tecnologia = 'HTML';

switch ($tecnologia) {
    case 'PHP':
        echo "PHP, un excelente lenguaje!";
        break;
    case 'JavaScript':
        echo "Genial, el lenguaje de la web";
        break;
    case 'HTML':
        echo 'Maquetados pro';
        break;
    default:
        echo "Lenguaje desconocido";
        break;
}
?>