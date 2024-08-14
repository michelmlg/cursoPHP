<div class="titulo">Variáveis</div>
<?php
$numeroA = 13;
echo $numeroA . "<br>";

var_dump($numeroA);

echo "<br>";

// para ser uma váriavel você precisa de $ antes do nome.

$a = 3; // isso é uma atribuição de valor dentro da variável
$b = 16;

$somaDosNumeros = $a + $b;
EcHo $somaDosNumeros . '<br>'; // alguns parâmetros do PHP não são caseSensitive

echo isset($somaDosNumeros); // retorna um se a variável está setada

unset($somaDosNumeros);
echo isset($somaDosNumeros); // retorna nada quando a variável não é setada
// echo var_dump($somaDosNumeros); retorna UM ERRO = 'Undefined variable $somaDosNumeros'

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma string!";
echo '<br>' . $variavel;

// Nomes de variável
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; // Evitar acentos!
// $6var = 'invalida';
// $%var7 = 'invalida';
// $var8% = 'invalida';

echo '<br>';

// $_SERVER é uma váriaveis Predefinidas e é um array.
var_dump($_SERVER['HTTP_HOST']); 

?>