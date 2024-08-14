<div class="titulo">Desafio Equação</div>
<?php

// Minha versão da equação separada pelas variáveis

$numeradorA = ((6 * (3 + 2)) ** 2) / (3 * 2);
$numeradorB = (((1-5)*(2-7)/2) ** 2);
$denominadorC = 10 ** 3;

echo 'Numerador A: ' . $numeradorA . '<br>';

echo 'Numerador B: ' . $numeradorB . '<br>';

echo 'Denominador C: ' . $denominadorC . '<br>';

$resultado = (($numeradorA - $numeradorB) ** 3) / $denominadorC;

echo 'Resultado da equação: ' . $resultado . '<br>';

// Fim da minha versão.

$numA = (6 * (3+2)) ** 2;
$denA = 3 * 2;

$numB = (1 - 5) * (2 - 7);
$denB = 2;

$superiorA = $numA / $numB;
$superiorB = ($numB / $denB) ** 2;

$superior = ($superiorA - $superiorB) ** 3;
$inferior = 10 ** 3;

$final = $superior / $inferior;
echo "O resultado final é " . $final . ".";