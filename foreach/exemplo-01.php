<?php
//https://www.php.net/manual/pt_BR/control-structures.foreach.php
//https://www.w3schools.com/php/php_arrays.asp
//https://www.w3schools.com/php/php_arrays_indexed.asp
/*O construtor foreach fornece uma maneira fácil de iterar sobre arrays. O foreach funciona somente em arrays e objetos,
 e emitirá um erro ao tentar usá-lo em uma variável com um tipo de dado diferente ou em uma variável não inicializada. */
 //Relacionado: https://www.php.net/manual/pt_BR/language.types.array.php

$meses = array(
    "Janeiro","Fevereiro","Março",
    "Abril","Maio","Junho",
    "Julho","Agosto","Setembro",
    "Outubro","Novembro","Dezembro"
);
foreach ($meses as $index => $mes){

    echo "Indice: " .$index ."<br>";
    echo "O mês é: ".$mes ."<br><br>";

}

?>