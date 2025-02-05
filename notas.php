<?php
$notab1 = 9;
$notab2 = 6;
$notab3 = 5;
$notab4 = 6;
$media = ($notab1 + $notab2 + $notab3 + $notab4) / 4;
echo "O aluno obteve a média: $media";
 if ($media >= 7) {
    echo "<br> APROVADO.";
 } else if ($media >= 5 && $media < 7) {
    echo "<br> RECUPERAÇÃO.";
 }
 
 else {
    echo "<br> REPROVADO.";
 }