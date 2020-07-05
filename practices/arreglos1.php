<?php

/*
    Ejercicio #2: Crea un arreglo que contenga como clave los nombres de 5 países y como valor otro arreglo con 3 ciudades que pertenezcan a ese país,
    después utiliza un ciclo foreach, para imprimir el nombre del país seguido de las ciudades que definiste:

    Ejemplo:
    México: Monterrey Querétaro Guadalajara
    Colombia: Bogota Cartagena Medellin
*/

$countries = [
    'Venezuela' => ['Caracas', 'Portuguesa', 'Guanare'],
    'Trinidad y Tobago' => ['Puerto España', 'Diego Martin', 'Chaguanas'],
    'Colombia' => ['Bogotá','Medellín','Cali'],
    'Cuba' => ['Habana','Santiago de Cuba','Santa Clara'],
    'Argentina' => ['Buenos Aires','Santa Fe','La Plata']
];

foreach ($countries as $country => $cities) {
    echo '<b>'.$country.'</b>:<br>';
    echo '<ul>';
        foreach ($cities as $city){
            print '<li>'.$city.'</li>';
        }
    echo '</ul>';
}

?>