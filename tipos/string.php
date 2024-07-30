<div class="titulo">Tipo String</div>
<?php
echo "Eu sou uma string";
echo '<br>';
var_dump("Eu também");
echo '<br>';

// concatenação
echo "Nós também" . ' somos';
echo("Numero é" . 123);
echo '<br>', "Também aceito", " virgulas";

echo '<br>';
echo "'Teste' " . '"Teste"' . '\'Teste\'' . "\"Teste\"" . "\\"; 

print("<br>Também existe o função print");
print"<br>Também existe o função print";

// Algumas funções

// Passa os caracteres da string para maiusculas
echo '<br>' . strtoupper("maximizado");

// Passa os caracteres da string para minusculas
echo '<br>' . strtolower("MINIMIZADO");

// Deixa somente a primeira letra maiuscula
echo '<br>' . ucfirst("só a primeira letra");

// Deixa a primeira letra de todas as palavras maiuscula
echo '<br>' . ucwords("todas as palavras");

// Mede o tamanho de uma string
echo '<br>' . strlen("Quantas letras?");

// Mede o tamanho da string, e pode ser utilizado o tipo de encoding
echo '<br>' . mb_strlen("Eu também", "UTF-8");

// Divide a string com base no indice dos caracteres
echo '<br>' . substr('Só uma parte mesmo', 7); // parte mesmo
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // parte

// Troca um trecho escolhido da string por outro
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');













?>