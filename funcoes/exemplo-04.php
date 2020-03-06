<?php
//https://www.php.net/manual/pt_BR/function.func-get-arg.php
//func_get_arg — Retorna um item para uma lista de argumentos
function ola(){

    $argumentos = func_get_args();//Retorna um array contendo uma lista de argumentos da função
    return $argumentos;
}
var_dump(ola("Bom dia"));

?>