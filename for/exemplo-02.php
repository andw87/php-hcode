<?php
//Demonstração de infinity loop ou Loop infinito proposital em PHP para demonstrar um erro comum que pode derrubar um servidor
//Observe no seu navegador a barra de rolagem diminuindo, os numeros exibidos na tela aumentando a contagem e conforme executa, observe no gerenciador de tarefas o processo do navegador aumentando o consumo de memória...
//TimeOut padrão 60 segundos por sessão https://httpd.apache.org/docs/2.4/mod/core.html#timeout
//Contexto: https://en.wikipedia.org/wiki/Infinite_loop 
for ($i=0;$i < 10; $i--){ 
  
    echo $i. " ";

}

?>