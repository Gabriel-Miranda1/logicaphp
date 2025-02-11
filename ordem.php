<?php
$numeros = [15, 10, 35, 20, 18, 30, 5, 60, 45, 40];
sort($numeros);
foreach ($numeros as $numero) {
    echo $numero . ", "; }	
rsort($numeros); 
echo '<br>';
foreach ($numeros as $numero) {
    echo $numero . ", "; }