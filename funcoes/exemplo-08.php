<?php
//https://www.php.net/manual/pt_BR/language.types.type-juggling.php
function soma(int ...$valores):string{

    return array_sum($valores);

}

echo var_dump (soma(2,2));
echo"<br>";
echo soma(25,25);
echo"<br>";
echo soma(1.5,3.02);
echo"<br>";

?>