<?php
/*
    Ejercicio 3: Escribe el código necesario para encontrar los 3 números más grandes y los 3 números más bajos de la siguiente lista:
*/

echo '<h1>Desordenado</h1>';
$values = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
foreach ($values as $key => $value) {
    echo $value.', ';
}

echo '<h1>Ordenado</h1>';
sort($values);
foreach ($values as $key => $value) {
    echo $value.', ';
}

echo '<h1>3 menores</h1>';
for ($i=0; $i<=2; $i++){
    echo $values[$i].', ';
}
echo '<h1>3 mayores</h1>';
$aux = count($values)-1; //cantidad de elementos del arreglo
for ($i=$aux; $i>=$aux-2; $i--){
    echo $values[$i].', ';
}
?>