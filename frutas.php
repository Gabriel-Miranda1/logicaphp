<?php
$frutas = ["maçã", "banana", "laranja", "melancia", "uva"];

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

    echo "-----------------------------------<br>";
    $frutas[] = 'morango';
    foreach ($frutas as $fruta) {
        echo $fruta . "<br>";
    }
    echo "-----------------------------------<br>";
    array_shift($frutas);
    unset($frutas[1]);

    foreach ($frutas as $fruta) {
        echo $fruta . "<br>";
    }
