<?php
$a = NULL;
$b = NULL;
$c = 10;
$d = 8;

echo$a ?? $b ?? $c;
echo "<br>";
echo$a ?? $d ?? $c;
echo "<br>";


?>