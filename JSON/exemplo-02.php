<?php
//https://www.php.net/manual/pt_BR/function.json-decode.php
//https://www.w3schools.com/php/php_ref_json.asp

$json = '[{"nome":"Anderson","idade":"33"},{"nome":"Edilene","idade":"38"}]';

//json_decode — Decodifica uma string JSON
$data = json_decode($json, true);

var_dump($data);

?>