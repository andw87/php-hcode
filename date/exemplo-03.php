<?php
//https://www.php.net/manual/pt_BR/function.strftime.php
//https://www.php.net/manual/pt_BR/function.setlocale.php
//https://www.w3schools.com/php/func_string_setlocale.asp

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8","portuguese");//setlocale — Define informações locais, LC_ALL = Todos os itens abaixo

echo ucwords(strftime("%A %B"));//strftime — Formata uma hora/data de acordo com as configurações locais

?>