<?php
//https://www.php.net/manual/pt_BR/function.strtotime.php

//$ts = strtotime("2001-09-11");
//$ts = strtotime("now");
//$ts = strtotime("+1 day");
$ts = strtotime("+1 week");//strtotime — Interpreta qualquer descrição de data/hora em texto em inglês em timestamp Unix

echo date("l,d/m/Y",$ts)
?>