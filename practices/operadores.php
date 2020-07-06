<?php

/*
    Ejercicio 1: Calcula el resultado de 32+3 y 3(2+3). Escribe el procedimiento que empleaste en la sección de discusiones.
*/
$result = 32+3;
echo 'Resultado 1 = '.$result.'<br>';

$result = 3*(2+3);
echo 'Resultado 2 = '.$result.'<br>';

/*
    Tomando en cuenta que tenemos una variable llamada $valor, escribe en la sección de discusiones
    ¿Cómo sería un condicional para las siguientes opciones?

    $valor es mayor que 5 pero menor que 10
    $valor es mayor o igual a 0 pero menor o igual a 20
    $valor es igual a “10” asegurando que el tipo de dato sea cadena
    $valor es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15

*/

$valor = 20;

if ($valor>5 and $valor<10){
    echo '$valor = '.$valor.', es mayor que 5 pero menor que 10<br>';
}

if ($valor>=0 && $valor<=20) {
    echo '$valor = '.$valor.', es mayor o igual a 0 pero menor o igual a 20<br>';
}

if ($valor==='10') {
    echo '$valor = '.$valor.', es igual a “10” asegurando que el tipo de dato sea cadena<br>';
}

if ($valor>0 and $valor<5 or $valor>10 and $valor<15) {
    echo '$valor = '.$valor.', es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15<br>';
}

?>