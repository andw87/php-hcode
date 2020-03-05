<?php
//https://www.php.net/manual/pt_BR/language.variables.basics.php
//As variáveis no PHP são representadas por um cifrão ($) seguido pelo nome da variável. Os nomes de variável são case-sensitive.
//Relacionado: https://www.php.net/manual/pt_BR/function.unset.php e https://www.php.net/manual/pt_BR/function.isset.php

$anoNascimento = 1987;
$nome = "Anderson";
$sobreNome = "Wladis Borges Ferreira";

$nomeCompleto = $nome." ".$sobreNome; //concatenação
echo $nomeCompleto;

exit;
echo "<br>"; //HTML - quebra-de-linha entre ""
echo $anoNascimento;

//unset($nomeCompleto); //unset — Destrói a variável especificada

//isset — Informa se a variável foi iniciada
if(isset($nomeCompleto)){ 
	echo $nomeCompleto;
}
?>
