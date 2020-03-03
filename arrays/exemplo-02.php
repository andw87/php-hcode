<?php

//Array bidimensional - https://www.w3schools.com/php/php_arrays_multidimensional.asp
//Contexto: https://pt.wikipedia.org/wiki/Arranjo_(computa%C3%A7%C3%A3o)

$carros[0][0] = "GM";
$carros[0][1] = "Opala";
$carros[0][2] = "Omega";
$carros[0][3] = "Vectra";

$carros[1][0] = "Ford";
$carros[1][1] = "Corcel";
$carros[1][2] = "Landau";
$carros[1][3] = "Mondeo";

echo $carros[0][3];//Buscará o elemento da matriz 0 linha 3
echo "<br>";
echo end($carros[1]); //end — Faz o ponteiro interno de um array apontar para o seu último elemento - https://www.php.net/manual/pt_BR/function.end.php

?>