<?php
$nome = "Anderson";
/*
https://www.php.net/language.variables.scope
O escopo de uma variável é o contexto onde foi definida. 
A maioria das variáveis do PHP tem somente escopo local. 
Este escopo local inclui os arquivos incluídos e requeridos. Por exemplo: */

//https://www.php.net/manual/pt_BR/functions.user-defined.php
function teste(){
/*No PHP, as variáveis globais precisam ser declaradas como globais dentro de uma função, se for utilizada em uma. 
https://www.php.net/manual/pt_BR/language.variables.scope.php#language.variables.scope.global*/
    global $nome;
    echo $nome;

}
/*
function teste2(){
    
    echo $nome."agora no teste 2";

}

teste2();*/
teste();
?>