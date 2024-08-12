<div class="titulo">Conversões</div>
<?php

// retorna se um número é int (retorna com 1 ou 0) 1 = verdadeiro, 0 = falso
echo is_int(PHP_INT_MAX);

echo '<br>';

var_dump(PHP_INT_MAX + 1); // se você somar 1 ao maior numero int, o seu valor passa a ser float, por já ter atingido o limite suportado pelo tipo INT

echo '<br>';

var_dump(1 + 1.0);

echo '<br>';

var_dump((float) 3); // typecasting ou conversao explicita


echo "<p>Float para int</p>";
var_dump((int) 6.8);

echo '<br>';
var_dump(intval('11010101101', 2)); // Convertendo valor binário em decimal
echo '<br>';
var_dump(intval(2.999));
echo '<br>';
var_dump((int)round(2.8));

// Operações com string
echo '<p>Strings</p>';

var_dump(3 + "2"); // = 5
echo '<br>';

var_dump("3" + 2); // = 5
echo '<br>';

var_dump("3" . 2); // = 32 (string)
echo '<br>';

echo '<br>', is_string("3" . 2);
echo '<br>', is_string("3" + 2);


echo '<br>';
//var_dump(1 + "cinco");
//var_dump(1 + "2 + 5");
var_dump("25" + 1);


echo '<br>';
var_dump("3.2" + 1);
echo '<br>';
var_dump("-3.2e2" + 1);
echo '<br>';
var_dump((int) "10.5");
echo '<br>';
var_dump((float) "10.5");


?>