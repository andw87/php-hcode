<?php
//https://www.php.net/manual/pt_BR/function.require.php
/*A declaração require é idêntica a include exceto que em caso de falha também produzirá um erro fatal de nível 
E_COMPILE_ERROR. 
Em outras palavras, ele parará o script enquanto que o include apenas emitirá um alerta (E_WARNING)
 permitindo que o script continue. */
//https://www.w3schools.com/php/php_includes.asp
//require "inc/exemplo-01-function.php";
require "inc/exemplo-01-function.php";
require_once"inc/exemplo-01-function.php"; 
//https://www.php.net/manual/pt_BR/function.require-once.php
/*A declaração require_once é idêntica a requirem exceto que o PHP verificará se o arquivo 
já foi incluído, e em caso afirmativo, não o incluirá (exigirá) novamente. */
//Existe também: include_once
//https://www.php.net/manual/pt_BR/function.include-once.php#function.include-once

$resultado = somar(10,20);

echo $resultado;
?>