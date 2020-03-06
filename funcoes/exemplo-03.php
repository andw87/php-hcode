<?php

function ola($texto = "mundo"){
    return "Olá $texto!<br>";//interpolação de variáveis
}
echo ola();
echo ola("");
echo ola("Anderson");
echo ola("Wladis");

?>