<div class="titulo">Valor vs Referência</div>

<?php

// Diferença de atribuição por valor e por referência.
// Por padrão o PHP passa o conteúdo por valor.


$variavel = "valor inicial";
echo $variavel;

// Atribuição por Valor
$variavelValor = $variavel;
echo "<br> $variavelValor";
 
$variavelValor = "novo valor";
echo "<br> $variavel";
echo "<br> $variavelValor";
// FIM

// Atribuição por Referência
$variavelReferencia = &$variavel;
echo "<br>$variavel $variavelReferencia"; // Até então as duas variaveis tinham "valor inicial" como conteúdo

$variavelReferencia = 'mesma referencia'; // Na atribuição de referencia por as variaveis partilharem o mesmo endereço de memória, ambas tem seu conteúdo alterado.

echo "<br>$variavel $variavelReferencia";
