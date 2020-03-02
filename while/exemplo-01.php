<?php
// https://www.php.net/manual/pt_BR/control-structures.while.php
/*
O propósito da declaração while é simples. Ele dirá ao PHP para executar as declarações aninhadas repetidamente,
enquanto a expressão do while forem avaliadas como TRUE. O valor da expressão é checado a cada vez que o laço é iniciado,
então, mesmo seu valor mude durante a a execução das declarações aninhadas, a execução não será interrompida até o final da iteração 
( cada vez que o PHP executa as declarações dentro do laço é uma iteração). Entretanto, se a expressão do while for avaliada como FALSE desde o início,
as declarações aninhadas não serão executadas nenhuma vez.
*/
$condicao = true;

//https://www.php.net/manual/pt_BR/language.types.boolean.php

while ($condicao){

    $numero = rand(1,10);//rand — Gera um inteiro aleatório

    //https://www.php.net/manual/pt_BR/function.rand.php

    if($numero === 3){

        echo "TRÊS!!!";
        $condicao = false;

    }
    echo $numero . " ";
}

?>