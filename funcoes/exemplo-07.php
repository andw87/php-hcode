<?php

function soma(int ...$valores){

    return array_sum($valores);

}

echo soma(2,2);
echo"<br>";
echo soma(25,25);
echo"<br>";
echo soma(1.5,3.02);
echo"<br>";

?>