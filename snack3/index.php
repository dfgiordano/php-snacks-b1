<?php
/* Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */
    $randomNumbersArray = [];

    while (count($randomNumbersArray) < 15) {

        if ( !in_array($number, $randomNumbers) ) {
            $number = rand(1, 100);
        }
        array_push($randomNumbersArray, $number);
    }

    var_dump($randomNumbersArray);
?>