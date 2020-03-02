<?php
//https://www.php.net/manual/pt_BR/language.types.string.php
//https://www.w3schools.com/php/php_ref_string.asp

$nome = "Anderson";//para utilizar interpolação de variáveis tem que ser aspas duplas, 
$sobrenome = 'Wladis';

var_dump($nome,$sobrenome);

echo "<br>";
echo "ABC $nome";
echo "<br>";
echo 'ABC $nome';//o php interpreta tudo como texto nesta condição de aspas simples

?>