<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

$arraVuoto = [];

for($i = 0; count( $arraVuoto) > 15; $i++) {

    $numeroRandom = rand(1, 100 );

    if( !in_array( $numeroRandom, $arraVuoto )){
        $arraVuoto[] = $numeroRandom;
    }
}

for($k= 0; $k < count($arraVuoto); $k++){
    echo $arraVuoto[$k];
    echo "<br>";
}

?>