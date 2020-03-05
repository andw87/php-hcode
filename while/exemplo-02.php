<?php
//https://www.php.net/manual/pt_BR/control-structures.do.while.php
/*Os laços do-while é muito similar aos laços while, com exceção que a expressão de avaliação é 
verificada ao final de cada iteração em vez de no começo. A maior diferença para o laço while é
 que a primeira iteração do laço do-while sempre é executada (a expressão de avaliação é executada somente no final da iteração), 
 considerando que no laço while não é necessariamente executada (a expressão de avaliação é executada no começo de cada iteração,
  se avaliada como FALSE logo no começo, a execução do laço será abortada imediatamente). */
$total = 150;
$desconto = 0.9;

do {

    $total *= $desconto;

}while($total > 100);

echo $total;

?>