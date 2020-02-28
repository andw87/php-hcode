<?php
//Operadores de atribuição
//https://www.php.net/manual/pt_BR/language.operators.assignment.php

$nome = "Anderson";

echo $nome ." mais alguma coisa<br>";

$nome .= " Treinamentos";
/*Além do operador básico de atribuição, há "operadores combinados"
 para todos os operadores aritméticos, de array e string que permitem 
 a você pegar um valor de uma expressão e então usar seu próprio valor 
 para o resultado daquela expressão. 
 Note que a atribuição copia a variável original para a nova (atribuição por valor),
  assim a mudança de uma não afeta a outra. Isto pode ser relevante se você precisa 
  copiar algo como uma grande matriz dentro de um loop apertado.
 */

echo $nome;
?>