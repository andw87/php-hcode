<?php
//Observar que "define" é diferente de "defined" - ver https://www.php.net/manual/pt_BR/function.defined.php, defined — Confere se uma constante existe
//https://www.w3schools.com/php/func_misc_define.asp

define("BANCO_DE_DADOS",[
    '127.0.0.1',
    'root',
    'password',
    'test'
]);

print_r(BANCO_DE_DADOS);//print_r — Imprime informação sobre uma variável de forma legível

?>