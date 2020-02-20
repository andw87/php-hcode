<?php

$nome = "Anderson";
$email = "anderson.awbf@gmail.com";

$ano = 1987;
$altura = 1.70;
$bloqueado = false;
/////////////////////////////////////////////
$frutas = array("abacaxi","laranja","manga");

//echo $frutas[2]; 

$nascimento = new DateTime();

//var_dump($nascimento);
////////////////////////////////////////////
$arquivo = fopen("exemplo-03.php", "r"); //fopen — Abre um arquivo ou URL

//var_dump($arquivo);

$nulo = NULL;
$vazio = "";

echo $nome." ".$email."<br/>"."<b>nascimento</b>"." ".$ano;

?>