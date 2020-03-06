<?php
//Recursividade em PHP
//fatorialT é utilizando o if ternário
//https://www.php.net/manual/pt_BR/language.operators.comparison.php#language.operators.comparison.ternary
//https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_ternary
//Outro operador condicional é o operador "?:" (ou ternário).
//Contexto: https://pt.wikipedia.org/wiki/Recursividade
function fatorialT($numero)
{
    return $numero > 1 ? $numero * fatorialT($numero - 1) : 1; //Utilizando if ternário
}
;
echo fatorialT(4);

echo "<br>";
//utilizando if
function fatorial($numero)
{
    if ($numero <= 1) {
        return $numero;
    } else {
        return $numero * fatorial($numero - 1);
    }
}
echo fatorial(5);
?>