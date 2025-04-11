

<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa {
    public $Curso;

    public function __construct($nome, $idade, $Curso) {
        parent::__construct($nome, $idade,);
        $this->disciplina = $Curso;
    }

    public function apresentar(): string {
        return parent::apresentar() . "Nome: {$this->nome}, Idade: {$this->idade} Curso: {$this->Curso}";
    }
}


?>