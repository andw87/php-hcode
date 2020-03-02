<?php
//https://www.php.net/manual/pt_BR/control-structures.switch.php
//https://www.w3schools.com/php/php_switch.asp

/*É importante entender como a declaração switch é executada a fim de evitar enganos. 
A declação switch executa linha por linha (na verdade, declaração por declaração). 
No início nenhum código é executado. Somente quando uma declaração case é encontrada, 
cuja expressão avalia um valor que corresponde ao valor do switch, o PHP começará a executar a declaração.
O PHP continuará a executar a declaração até o fim do bloco switch, ou até a primeira declaração break encontrada.
Se não for escrita uma declaração break ao final da lista de declarações do case,
o PHP continuará executando as declarações dos próximos cases. */


$diaDaSemana = date("w");
//https://www.php.net/manual/pt_BR/function.date.php
//https://www.w3schools.com/php/php_date.asp
/*w	Representação numérica do dia da semana	0 (para domingo) até 6 (para sábado) */

switch ($diaDaSemana){

    case 0: 
    echo "Domingo";
    break;//break finaliza a execução da estrutura for, foreach, while, do-while ou switch atual. https://www.php.net/manual/pt_BR/control-structures.break.php

    case 1: 
    echo "Segunda-feira";
    break;

    case 2: 
    echo "Terça-feira";
    break;

    case 3: 
    echo "Quarta-feira";
    break;

    case 4: 
    echo "Quinta-feira";
    break;

    case 5: 
    echo "Sexta-feira";
    break;

    case 6: 
    echo "Sábado";
    break;//Este último break não seria necessário pois é a última situação

    default://Um case especial é o default. Este case corresponde a tudo que não foi correspondido pelos outros cases
    echo "Data inválida";
    break;

}
?>