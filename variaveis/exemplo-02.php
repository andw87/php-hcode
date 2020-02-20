<?php

$anoNascimento = 1987;
$nome = "Anderson";
$sobreNome = "Wladis Borges Ferreira";

$nomeCompleto = $nome." ".$sobreNome; //concatenação
echo $nomeCompleto;

exit;
echo "<br/>"; //HTML - quebra-de-linha entre ""
echo $anoNascimento;

//unset($nomeCompleto); //unset — Destrói a variável especificada

//isset — Informa se a variável foi iniciada
if(isset($nomeCompleto)){ 
	echo $nomeCompleto;
}
?>
