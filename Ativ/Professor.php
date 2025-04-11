<?php
require_once 'Pessoa.php';

class Professor extends Pessoa {
    public $disciplina;

    public function __construct($nome, $idade, $disciplina) {
        parent::__construct($nome, $idade,);
        $this->disciplina = $disciplina;
    }

    public function apresentar(): string {
        return parent::apresentar() . "Nome: {$this->nome}, Idade: {$this->idade} Disciplina: {$this->disciplina}";
    }
}
?>
