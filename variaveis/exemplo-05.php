<?php
$nome = "Anderson";
function teste()
{
    global $nome;
    echo $nome;
}
teste();
?>