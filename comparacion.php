<?php 
$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2);      //false
echo "<br/>";

var_dump($numero1 < $numero2);      //true
echo "<br/>";

var_dump($numero1 >= $numero2);     //false
echo "<br/>";

var_dump($numero1 <= $numero2);     //true
echo "<br/>";

var_dump($numero2 == $numero3);     //true
echo "<br/>";

var_dump($numero2 == $numero4);     //true
echo "<br/>";

var_dump($numero2 === $numero4);    //false
echo "<br/>";

// -1 Si Izquierda es menor, 0 Si es igual, 1 Si izquierda es mayor
var_dump($numero1 <=> $numero2);    //-1
echo "<br/>";

var_dump($numero2 <=> $numero3);    //0
echo "<br/>";

var_dump($numero2 <=> $numero1);    //1
echo "<br/>";
?>