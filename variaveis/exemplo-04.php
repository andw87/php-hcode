<?php
/*
Documentação:
https://www.php.net/manual/pt_BR/reserved.variables.get.php
https://www.php.net/manual/pt_BR/reserved.variables.server
$_SERVER é um array contendo informação como cabeçalhos, paths,
 e localizações do script. As entradas neste array são criadas pelo servidor web. 
 Não há garantia que cada servidor web proverá algum destes; servidores podem omitir alguns, 
 ou fornecer outros não listados aqui. Dito isso, um grande número dessas variáveis são previstas pela
  » CGI 1.1 specification, então você deve estar hábil para esperá-las. 
  
'REMOTE_ADDR'
O endereço IP de onde o usuário está visualizado a página atual.

'SCRIPT_NAME'
Contém o caminho completo do script atual. Útil para páginas que precisam apontar para elas mesmas
 (dinamicamente). A constante __FILE__ contém o caminho completo e nome do arquivo (mesmo incluído) atual.

  */
//Um array associativo de variáveis passadas para o script atual via o método HTTP GET
$nome = $_GET["a"];

//echo $nome;
//var_dump($nome);


//$ip = $_SERVER["REMOTE_ADDR"];
$ip = $_SERVER["SCRIPT_NAME"];
echo $ip;
?>