<div class="titulo">Atribuições</div>
<?php

// As variáveis não tem tipo associado
// Tipagem fraca!
// o Compilador sabe os tipos em cada variável no momento de interpretar o código

$title = 'AtribuiçÕes';

$numero = 10;
echo '<br>' . $numero;

$numero = $numero - 3;
echo '<br>' . $numero;

$numero = $numero + 1.5;
echo '<br>' . $numero;

$numero--; // $numero = numero - 1
echo '<br>' . $numero;

--$numero;
echo '<br>' . $numero;

$numero++; // $numero = numero + 1
echo '<br>' . $numero;

++$numero;
echo '<br>' . $numero;

$numero = 20; // Atribuindo/substituindo o conteudo da variavel

$numero -= 5; // decrementando o valor da variavel
echo '<br>' . $numero;

$numero += 5;
echo '<br>' . $numero;

$numero *= 10; // atribuição multiplicativa
echo '<br>' . $numero;

$numero /= 2; // atribuição divisiva
echo '<br>' . $numero;

$numero %= 6; // atribuição divisiva
echo '<br>' . $numero;

$numero **= 4; 
echo '<br>' . $numero;

$numero .= 4; // concatenação!!
echo '<br>' . $numero;

$texto = 'Esse é um texto';
echo '<br>' . $texto;

$texto = $texto . ' qualquer';
echo '<br>' . $texto;

$texto .= ' de verdade!';
echo '<br>' . $texto;

//$VariavelInexistente = 'valor existente';
echo '<br>' . $VariavelInexistente;
echo var_dump($VariavelInexistente);
$valor = $VariavelInexistente ?? 'valor default'; // ?? determina o valor padrão
echo '<br>' . $valor;

