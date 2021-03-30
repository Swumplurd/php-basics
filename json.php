<?php 

/* PHP y JS se puede comunicar por medio de JSON para ello tendremos que convertir arreglos asociativos a JSON
y convertir JSON a arreglos asociativos segun se requiera */

$productos = [
    [
        'nombre' => 'Tablet', 
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisión 24"', 
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo', 
        'precio' => 400,
        'disponible' => false
    ]
];

echo "<pre>";
var_dump($productos);

$json = json_encode($productos, JSON_UNESCAPED_UNICODE);    //Se utiliza la funcion json_encode(ArregloaConvertir, (Opcional)Tipo de conversion(para ver acentos etc.)) Devuelve un string JSON

$json_array = json_decode($json);   //Se usa json_decode(string JSON a convertir)

var_dump($json);
var_dump($json_array);
echo "</pre>";

?>