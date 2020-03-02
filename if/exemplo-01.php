<?php
//https://www.php.net/manual/pt_BR/control-structures.if.php
//if: O construtor if é um dos recursos mais importantes em muitas linguagens, inclusive no PHP. Permite a execução condicional de fragmentos de código.

//https://www.php.net/manual/pt_BR/control-structures.else.php
/*else: Muitas vezes deseja-se executar uma instrução se uma certa condição for válida, e uma instrução 
diferente se a mesma condição não for válida. Para isso que o else serve. O else estende a instrução if 
para executar outras caso a expressão no if retornar FALSE. */

//https://www.php.net/manual/pt_BR/control-structures.elseif.php
/*elseif, como o nome sugere, é uma combinação do if e else. Como o else, estende um if para executar instruções diferentes no caso da expressão if original 
ser avaliada como FALSE. Entretanto, diferentemente do else, executará uma expressão alternativa somente se a expressão condicional do elseif for avaliada como TRUE. */

$qualASuaIdade = 11;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualASuaIdade <$idadeCrianca){
    echo"Criança";

}else if($qualASuaIdade < $idadeMaior){
    echo"Adolescente";
}else if ($qualASuaIdade <$idadeMelhor){
    echo "Adulto";
}else{
    echo"Idoso";
}

echo "<br>";
//https://www.php.net/manual/pt_BR/language.operators.comparison.php#language.operators.comparison.ternary
//https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_ternary
//Outro operador condicional é o operador "?:" (ou ternário).
echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

?>