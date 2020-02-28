<?php
//https://www.php.net/manual/pt_BR/function.str-replace
/*str_replace — Substitui todas as ocorrências da string de procura com a string de substituição */
$nome = "Anderson";

$nome = str_replace("A","W",$nome);
$nome = str_replace("o","0",$nome);
echo $nome;
?>