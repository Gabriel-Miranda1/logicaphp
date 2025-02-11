<?php

$taxas = array ( 
    'Dolar' => 5.10,
    'Euro' => 5.50,
    'Libra' => 6.30,
    'Peso argentino' => 0.05,
);

 $valor = 100;
    foreach ($taxas as $moeda => $taxa) {
        $conversao = $valor / $taxa;
        echo "R$ $valor em $moeda é igual " . number_format($conversao, 2, ",", ".") . "<br>";
    }