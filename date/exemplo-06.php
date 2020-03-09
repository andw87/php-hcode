<?php
//https://www.php.net/manual/pt_BR/datetime.format.php
//https://www.w3schools.com/php/php_date.asp
$dt = new DateTime(); //https://www.php.net/manual/pt_BR/class.datetime.php

//https://www.php.net/manual/pt_BR/class.dateinterval.php
$periodo = new DateInterval("P15D");//https://www.php.net/manual/pt_BR/dateinterval.format.php

echo $dt->format("d/m/Y h:i:s");//https://www.php.net/manual/pt_BR/datetime.format.php

$dt->add($periodo);//https://www.php.net/manual/pt_BR/datetime.add.php
//https://www.w3schools.com/php/phptryit.asp?filename=tryphp_date1

echo"<br>";

echo $dt->format("d/m/Y h:i:s");//https://www.php.net/manual/pt_BR/datetime.format.php


