<?php
//https://www.php.net/manual/pt_BR/control-structures.for.php
//https://www.w3schools.com/php/php_looping_for.asp
//Relacionado: https://www.php.net/manual/en/language.operators.increment.php

for ($i = 0; $i < 10; $i++){//Pulando de um em um

    echo $i . "<br>";

}
echo "<br>";

for ($i = 0; $i < 1000; $i+=5){//Pulando de cinco em cinco lembrar: https://www.php.net/manual/pt_BR/language.operators.assignment.php

    echo $i . "<br>";

}

echo "<br>";

for ($i = 0; $i < 1000; $i += 5){//Pulando de cinco em cinco, retirando o intervalo de 200 a 800
//lembrar https://www.php.net/manual/pt_BR/language.operators.logical.php
    if ($i > 200 && $i <800)continue;//continue é utilizado em estruturas de laço para pular o resto da iteração atual, e continuar a execução na validação da condição e, então, iniciar a próxima iteração. https://www.php.net/manual/pt_BR/control-structures.continue.php
    if ($i === 900)break;//break finaliza a execução da estrutura for, foreach, while, do-while ou switch atual. https://www.php.net/manual/pt_BR/control-structures.break.php
    echo $i . "<br>";

}

echo "<br>";
for ($i = 0; $i < 1000; $i+=5){//Pulando de cinco em cinco, retirando o intervalo de 200 a 800 e antes de 900

    if ($i > 200 && $i <= 800)continue;
    echo $i . "<br>";

}

echo "<br>";


?>