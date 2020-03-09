<?php

class Pessoa {

    public $nome;//Atributo
    public function falar(){//Método

        return "O meu nome é ".$this->nome;

    }

}
$Anderson = new Pessoa();
$Anderson->nome =  "Anderson Wladis";
echo $Anderson->falar();

?>