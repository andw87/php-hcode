<?php
//https://www.php.net/manual/pt_BR/migration70.new-features.php
/*Operador de coalescência nula ¶
O operador de coalescência nula (??) foi adicionado como um truque sintático 
para o caso trivial de precisar usar um ternário em conjunto com a função isset().
 Ele retorna o primeiro operando se este existir e não for NULL; caso contrário retorna o segundo operando. */
$a = NULL;
$b = NULL;
$c = 10;
$d = 8;

echo$a ?? $b ?? $c;
echo "<br>";
echo$a ?? $d ?? $c;
echo "<br>";


?>