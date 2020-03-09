<?php

class Pessoa{

    public $nome = "Anderson Wladis";
    protected $idade = 33;
    private $senha = "abc123";

    public function verDados(){
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }

}
class Programador extends Pessoa{
    public function verDados(){
        echo get_class($this). "<br/>";

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }
}
$objeto = new Programador();
//echo $objeto->nome . "<br/>";
//echo $objeto->idade . "<br/>";
//$objeto->verDados();
$objeto->verDados();


?>