<?php
//https://www.php.net/manual/pt_BR/language.operators.string.php

//Lembrete HTML:
// O <b> tag especifica o texto em negrito sem qualquer importância extra. 
//O <br> tag insere uma única quebra de linha.
//Contexto: https://www.w3schools.com/tags/tag_br.asp - https://www.w3schools.com/tags/tag_b.asp

//Declaração de Variáveis
$nome = "Anderson";
$sobrenome = "Wladis Borges Ferreira";
$email = "anderson.awbf@gmail.com";
$nascimento = 1987;
$pais = "Brasil";

//Utilizando a 1º forma
$nomeCompleto = "<b>".$nome." ".$sobrenome."</b>"."<br/>";
echo $nomeCompleto,$email."<br/>".$nascimento."<br/>".$pais."<br/><br/>";

//Utilizando a 2º forma - atribuição
$nomeCompleto = "<b>"."$nome "."</b>";
$nomeCompleto .= "<b>"."$sobrenome"."</b>"."<br/>";
$nomeCompleto .= "$email"."<br/>";
$nomeCompleto .= "$nascimento"."<br/>";
$nomeCompleto .= "$pais"."<br/><br/>";

echo $nomeCompleto;

//Utilizado a 3º forma - utilizando chaves para concatenar (recomendado quando se inserem variáveis mais complexas como arrays)
$nomeCompleto = $nome;
$nomeCompleto .= $sobrenome;
$nomeCompleto .= $email;
$nomeCompleto .= $nascimento;
$nomeCompleto .= $pais;

echo "Meu nome é <b>{$nome} {$sobrenome}</b>, meu e-mail:{$email}<br/>Nascido no ano:{$nascimento} no {$pais}."."<br/><br/>";

//Utilizando a 4º forma - apenas aspas duplas

echo "Meu nome é <b>$nome $sobrenome</b>, meu e-mail:$email<br/>Nascido no ano:$nascimento no $pais."."<br/><br/>"; 

?>