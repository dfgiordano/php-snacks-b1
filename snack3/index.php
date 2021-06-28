/* Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */

<?php
$randomNumbersArray = array();
for ($i = 0; $i < 15; $i++) {
    if ( !in_array($number, $randomNumbers) ) {
        $number = rand(1, 100);
    }
    array_push($randomNumbersArray, $number);
}

var_dump($randomNumbersArray);
?>