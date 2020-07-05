<?php

/*
    Ejercicio #1: Escribe el código necesario para generar la cadena final usando el arreglo dado

    Ejemplo:
    Lado, ledo, lido, lodo, ludo,
    decirlo al revés lo dudo.
    Ludo, lodo, lido, ledo, lado,
    ¡Qué trabajo me ha costado!
*/

    $array = [

        'keyStr1' => 'lado',
        0 => 'ledo',
    
        'keyStr2' => 'lido',
        1 => 'lodo',
        2 => 'ludo'
    
    ];

    echo '<h1>'.'Manipulando Valores de arreglo'.'</h1>';
    foreach ($array as $value) {
        echo $value.'<br>';
    }

    echo '<h1>'.'Manipulando Llaves de arreglo'.'</h1>';
    $j = 0;
    foreach ($array as $key => $value) {
        echo $key.'<br>';
        $array2[$j] = $value;
        $j++;
    }

    echo '<h1>Imprimiendo array al revez</h1>';
    $aux = count($array2)-1;
    echo '<br>'.$aux.'</br>';
    for ($i=$aux; $i>=0; $i--){
        echo $array2[$i].'<br>';
    }

    echo '<h1>Imprimiendo array al revez con la funcion array_reverse</h1>';
    //var_dump(array_reverse($array));
    $array2 = array_reverse($array); //devuelve un array con onden inverso
    foreach ($array2 as $value) {
        echo $value.'<br>';
    }
?>