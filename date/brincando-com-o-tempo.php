<?php
//https://www.php.net/manual/pt_BR/timezones.america.php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

date_default_timezone_set('America/Campo_Grande');

echo "Hoje é " . date("d/m/Y") . "<br>";
echo "Hoje é " . date("d.m.Y") . "<br>";
echo "Hoje é " . date("d-m-Y") . "<br>";
echo strftime('%A, %d de %B de %Y', strtotime('today'));
echo "<br>";

//https://www.w3schools.com/php/phptryit.asp?filename=tryphp_date2
echo " - Horário local " . date("h:i");


//https://www.w3schools.com/php/phptryit.asp?filename=tryphp_date6
//Informar data para comparação
//https://www.php.net/manual/pt_BR/function.strtotime.php
//https://strtotime.co.uk/
$data=strtotime("tomorrow");
echo date("d-m-Y h:i:sa", $data) . "<br>";

$data=strtotime("next Saturday");
echo date("d-m-Y h:i:sa", $data) . "<br>";

$data=strtotime("+6 Months");
echo date("d-m-Y h:i:sa", $data) . "<br>";
echo "<br>";

//https://www.w3schools.com/php/phptryit.asp?filename=tryphp_date6
//Quantos dias faltam para uma data
//https://www.php.net/manual/pt_BR/function.ceil.php
$data1=strtotime("April 12");
$data2=ceil(($data1-time())/60/60/24);//ceil — Arredonda frações para cima
echo "Faltam " . $data2 ." dias para a Páscoa.";
echo "<br>";
//Comparação entre duas datas
$data1 = new DateTime();
$data2 = new DateTime('2020-04-12 00:00:00');
//date_diff — Retorna a diferença entre dois objetos DateTime - https://www.php.net/manual/pt_BR/datetime.diff.php
echo $data2->diff($data1)->format('Faltam %Y Anos %m Mês, %d dias e %h horas %i minutos');

?>