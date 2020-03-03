<?php
//Arrays - https://www.php.net/manual/pt_BR/language.types.array.php  e https://www.w3schools.com/php/php_arrays.asp

/*
Um array no PHP é na verdade um mapa ordenado. 
Um mapa é um tipo que relaciona valores a chaves.
Este tipo é otimizado para várias usos diferentes:
ele pode ser tratado como um array, uma lista (vetor),
hashtable (que é uma implementação de mapa), dicionário,
coleção, pilha, fila e provavelmente mais. Assim como existe a possibilidade 
dos valores do array serem outros arrays, árvores e arrays multidimensionais.

A explicação dessas estruturas está além do escopo desse manual, 
mas pelo menos um exemplo é dado para cada uma delas. Para mais informações, 
busque a considerável literatura que existe sobre esse extenso tópico.
*/
$frutas = array("laranja", "abacaxi", "melancia");//Array unidimensional: Também conhecido como vetor, é uma tabela de apenas uma coluna e varias linhas

print_r($frutas);//print_r — Imprime informação sobre uma variável de forma legível  - https://www.php.net/manual/pt_BR/function.print-r e https://www.w3schools.com/php/func_var_print_r.asp

?>