<div class="titulo">Tipo Boleano</div>
<?php
echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(False);

// retorna string
echo '<br>' . var_dump('false');

echo '<br>' . var_dump(false);

// retorna string
echo '<br>' . var_dump('true');


// Fazer as regras de conversões
echo '<p>Regras: </p>';

echo '<br>' . var_dump((bool) 0); // apenas zero é false

echo '<br>' . var_dump((bool) 20); // retorna true

echo '<br>' . var_dump((bool) -1); // retorna true

echo '<br>' . var_dump((bool) 0.0); // retorna false

echo '<br>' . var_dump((bool) 0.0000001); // retorna true

echo '<br>' . var_dump((bool) ""); // retorna false

echo '<br>' . var_dump((bool) " "); // retorna true

echo '<br>' . var_dump((bool) "0"); // retorna false

echo '<br>' . var_dump((bool) "00"); // retorna true

echo '<br>' . var_dump((bool) "false"); // retorna true

echo '<br>' . var_dump(!!"false"); // retorna true
?>