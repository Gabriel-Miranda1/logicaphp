<?php

$produtor = "Zé bonitinho";
$arroba = 15;
$preço_arroba = 300;
$peso1 = 160;
$peso2 = 190;

$qntd_arrobas = ($peso1 + $peso2)/$arroba;
$preço_total = $qntd_arrobas * $preço_arroba;

echo "O $produtor vai receber " . number_format($preço_total, 2, ",", ".") . " reais pelo boi";

