<form>

    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" name="OK">

</form>
<?php
//Dica para quem utilizar o VSCODE (IDE), atalho SHIFT + ALT + "SETA PARA CIMA OU PARA BAIXO" duplica a linha
//Observar abaixo na estrutura do IF que existem linhas verticais indicando a correta indentação do código
//Relacionado: https://pt.wikipedia.org/wiki/Indenta%C3%A7%C3%A3o

if (isset($_GET)){

    foreach ($_GET as $key => $value) {


     echo"Nome do campo: " . $key . "<br>";
     
     echo"Valor do campo: " . $value;

     echo"<hr> ";


    }

}

?>
