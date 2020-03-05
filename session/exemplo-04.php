<?php

//session_id('id de sessão aqui');//Recuperando sessão

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>