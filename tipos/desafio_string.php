<div class="titulo">Desafio String</div>
<?php

    // !AbcaBcabc

    // Enunciado:
    // Avaliando os métodos da documentação da string, qual método que a posição do texto 'abc' na string '!AbcaBcabc' retorne 1?

    $string = "!AbcaBcabc";
    $substring = "abc";

    // Tentativa 1

    // function mudaPosicao($string){
    //     $strDepois = substr($string, 7);
    //     if($strDepois == "abc"){
    //         return 1;
    //     }else{
    //         return 0;
    //     }
    // }
    // mudaPosicao($string);

    // Tentativa 2

    echo strpos($string,"abc") . '<br>';

    echo stripos($string, "abc") . '<br>';

    echo strpos(strtolower("!AbcaBcabc"), 'abc') . '<br>';
?>