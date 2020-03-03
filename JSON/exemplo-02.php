<?php
//https://www.php.net/manual/pt_BR/function.json-decode.php
$json = '[{"nome":"Anderson","idade":"33"},{"nome":"Edilene","idade":"38"}]';

//json_decode — Decodifica uma string JSON
$data = json_decode($json, true);

var_dump($data);

?>