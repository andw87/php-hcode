<?php
//https://www.php.net/manual/pt_BR/intro.json.php
//https://www.w3schools.com/php/php_ref_json.asp

//Esta extensão implementa o formato de troca de dados » JavaScript Object Notation (JSON). A decodificação é feita por um parser baseado no JSON_checker de Douglas Crockford.
$pessoas = array();

//array_push — Adiciona um ou mais elementos no final de um array
array_push($pessoas, array(
    'nome' => 'Anderson',
    'idade' => '33'

));

array_push($pessoas, array(
    'nome' => 'Edilene',
    'idade' => '38'

));
//https://www.php.net/manual/pt_BR/function.json-encode.php
//json_encode — Retorna a representação JSON de um valor
echo json_encode($pessoas);

?>