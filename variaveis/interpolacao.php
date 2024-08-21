<div class="titulo">Interpolação</div>
<?php

// Interpolação é o nome dado para a interpretação de uma variável no contexto da string

$numero = 10;
echo $numero;
echo '<br> $numero';
echo "<br> $numero"; // Com aspas duplas o $numero é interpretado como uma variável.

$texto = "A sua nota é: $numero";
echo "<br> $texto";

$objeto = 'caneta';
echo "<br>Eu tenho 5 $objetos";
echo "<br>Eu tenho 5 {$objeto}s";
echo "<br>Eu tinha 5 { $objeto}s mas perdi 3 {$objeto }s";

// Com aspas simples o conteúdo não é interpolado
// Já com aspas duplas = SIM!