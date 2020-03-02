<?php
//https://www.php.net/manual/pt_BR/language.variables.scope.php
/*O escopo de uma variável é o contexto onde foi definida. 
A maioria das variáveis do PHP tem somente escopo local.
Este escopo local inclui os arquivos incluídos e requeridos */
//Relacionado: https://www.php.net/manual/pt_BR/functions.variable-functions.php
$nome = "Anderson";
function teste()
/*O PHP suporta o conceito de funções variáveis. Isto significa que se um nome de variável tem parênteses no final dela,
 o PHP procurará uma função com o mesmo nome, qualquer que seja a avaliação da variável, e tentará executá-la. 
 Entre outras coisas, isto pode ser usado para implementar callbacks, tabelas de função e assim por diante. */
{
    global $nome;
    echo $nome;
}
teste();
?>