<?php

$anoNascimento = 1987;
$nome = "Anderson";
$sobreNome = "Wladis Borges Ferreira";

$nomeCompleto = $nome." ".$sobreNome;
echo $nomeCompleto;

exit;
echo "<br/>";
echo $anoNascimento;

//unset($nomeCompleto);


if(isset($nomeCompleto)){
	echo $nomeCompleto;
}
?>