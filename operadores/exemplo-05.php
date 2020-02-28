<?php
//https://www.php.net/manual/pt_BR/migration70.new-features.php
/*
Operador "nave espacial" (spaceship) ¶
O operador nave espacial é utilizado para comparar duas expressões. 
Ele retorna -1, 0 ou 1 quando $a for respectivamente menor que,
 igual a ou maior que $b. As comparações são feitas de acordo 
 com as já conhecidas regras de comparação de tipos do PHP.
*/

/*
<?php
// Inteiros
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1

// Números de ponto flutuante
echo 1.5 <=> 1.5; // 0
echo 1.5 <=> 2.5; // -1
echo 2.5 <=> 1.5; // 1

// Strings
echo "a" <=> "a"; // 0
echo "a" <=> "b"; // -1
echo "b" <=> "a"; // 1
?>
 */
$a = 50;
$b = 35;
$c = 50;

echo "<b>###Rótulo##</b><br><br>";
echo "<i>Termo a esquerda <=> Termo a direita</i><br><br>";
echo "0 quer dizer igual<br>";
echo "<br>";
echo "1 quer dizer que o termo a esquerda é maior<br>";
echo "<br>";
echo "-1 quer dizer que o termo a direita é maior<br>";
echo "<br>";

echo "50 é maior igual ou menor que 35<br>";
var_dump($a <=> $b);
echo "<br>";
echo "35 é maior igual ou menor que 50<br>";
var_dump($b <=> $a);
echo "<br>";
echo "50 é maior igual ou menor que 50<br>";
var_dump($a <=> $c);


?>