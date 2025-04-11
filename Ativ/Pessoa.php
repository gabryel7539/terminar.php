
<?php

class Pessoa{
   public $nome;
   public $idade;
   
    function __construct($nome, $idade,) {
    $this->nome = $nome;
    $this->idade = $idade;

}   
public function apresentar(): string {
    return "Nome: {$this->nome}, Idade: {$this->idade}";

}
}
?>