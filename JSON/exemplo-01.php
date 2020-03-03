<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Anderson',
    'idade' => '33'

));

array_push($pessoas, array(
    'nome' => 'Edilene',
    'idade' => '38'

));

echo json_encode($pessoas);

?>