<?php
//array_push — Adiciona um ou mais elementos no final de um array - https://www.php.net/manual/pt_BR/function.array-push.php
/*
array_push() trata array como uma pilha, e adiciona as variáveis passadas como argumentos no final de array. 
O tamanho do array aumenta de acordo com o número de variáveis adicionadas. 

Tem o mesmo efeito de:

            <?php
            $array[] = $var;
            ?>

repetido para cada argumento.

*/

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Anderson',
    'idade' => '33'

));

array_push($pessoas, array(
    'nome' => 'Edilene',
    'idade' => '38'

));

print_r($pessoas);//print_r — Imprime informação sobre uma variável de forma legível  - https://www.php.net/manual/pt_BR/function.print-r e https://www.w3schools.com/php/func_var_print_r.asp
//print_r($pessoas[0]); //Possibilidades de retornar o array
//print_r($pessoas[0]['nome']); //Possibilidades de retornar o array
?>