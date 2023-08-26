<?php
include 'libs/dd.php';

// function sum(...$args){   // ... los tres puntos almacena los argumentos en un array

//     // return $args[0]+$args[1];
//     return array_sum($args); // la funcion array_sum suma todos los valores del array $args
// }

// imprimirArgumentos(sum(5,100));

function multiplicar($a,$b,$c){
    return $a*$b*$c;
}
$array=[5,6,7];
imprimirArgumentos(multiplicar(...$array),5,8);  // ... operador spread, desenpaqueta $array 

?>