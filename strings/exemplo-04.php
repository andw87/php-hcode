<?php
//https://www.php.net/manual/pt_BR/function.strpos.php
//strpos — Encontra a posição da primeira ocorrência de uma string
$frase = "A repetição é mãe da retenção.";
$palavra = "mãe";
$q = strpos($frase, $palavra);
var_dump($q);
echo "<br>";
//https://www.php.net/manual/pt_BR/function.substr
//substr — Retorna uma parte de uma string
$texto = substr($frase,0,$q);
var_dump($texto);
//https://www.php.net/manual/pt_BR/function.strlen
//strlen — Retorna o tamanho de uma string

$texto2 = substr($frase,$q + strlen($palavra),strlen($frase));

echo "<br>";
var_dump($texto2);

echo "<br>";
//Ler artigos sobre concatenação
$fraseOrdenada =  $texto. $palavra. $texto2;
echo $fraseOrdenada;

?>