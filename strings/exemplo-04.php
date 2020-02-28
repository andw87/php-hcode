<?php
//https://www.php.net/manual/pt_BR/function.strpos.php
//strpos — Encontra a posição da primeira ocorrência de uma string
$frase = "A repetição é mãe da retenção.";
$q = strpos($frase, "mãe");
var_dump($q);
echo "<br>";
//https://www.php.net/manual/pt_BR/function.substr
//substr — Retorna uma parte de uma string
$texto = substr($frase,0,$q);
var_dump($texto);

?>