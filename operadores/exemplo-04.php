<?php
//Operadores de comparação

//https://www.php.net/manual/pt_BR/language.operators.comparison.php - https://www.php.net/manual/pt_BR/language.expressions.php

/*Operadores de comparação, como os seus nomes implicam, permitem que você compare dois valores.
 Você pode se interessar em ver as tabelas de comparação de tipos, que tem exemplo das várias comparações entre tipos relacionadas.
 */

$a = 30;
$b = 55;
$c = 55.0;

var_dump($a > $b);//> (maior que)

echo "<br>";

var_dump($a < $b);//< (menor que) 

echo "<br>";

var_dump($a = $b); //1 sinal de igual atribui valor, é operador de atribuição

echo "<br>";

var_dump($a == $b); //para comparação dos valores ,utilizar 2 iguais

echo "<br>";

var_dump($b == $c); //para comparação utilizar 2 iguais, lembrando que compara apenas o valor e não o tipo

echo "<br>";

var_dump($b === $c); //=== (igual a e do mesmo tipo)

echo "<br>";

var_dump($b != $c); //!= (diferente)

echo "<br>";

var_dump($b !== $c); //!= (diferente e do mesmo tipo)

?>