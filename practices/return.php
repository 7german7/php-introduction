<?php

$months = 42;

function getDuration($months){
    $years = floor($months/12);
    $extraMonths = $months % 12; // Residuo
    
    if($years < 1){
        return "$extraMonths months";
    } else if($extraMonths < 1){
        return "$years years";
    } else {
        return "$years years $extraMonths months";
    }
}

echo getDuration($months);

?>