<?php

$json = '[{"nome":"Anderson","idade":"33"},{"nome":"Edilene","idade":"38"}]';

$data = json_decode($json, true);

var_dump($data);

?>