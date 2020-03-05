<?php
//https://www.php.net/manual/pt_BR/language.constants.php e https://www.w3schools.com/php/php_constants.asp
//Uma constante é um identificador (nome) para um valor único. Como o nome sugere, esse valor não pode mudar durante a execução do script
//define — Define uma constante - https://www.php.net/manual/pt_BR/function.define.php

//Observar que "define" é diferente de "defined" - ver https://www.php.net/manual/pt_BR/function.defined.php, defined — Confere se uma constante existe
//https://www.w3schools.com/php/func_misc_define.asp
define("SERVIDOR", "127.0.0.1");

echo SERVIDOR;//Boa pratica utilizar a constante com letras maiúsculas

?>