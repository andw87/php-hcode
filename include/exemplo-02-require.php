<?php
//https://www.php.net/manual/pt_BR/function.require.php
/*A declaração require é idêntica a include exceto que em caso de falha também produzirá um erro fatal de nível 
E_COMPILE_ERROR. 
Em outras palavras, ele parará o script enquanto que o include apenas emitirá um alerta (E_WARNING)
 permitindo que o script continue. */

require "inc/exemplo-01-function.php";

$resultado = somar(10,20);

echo $resultado;
?>