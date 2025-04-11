<?php
    include_once'Pessoa.php';
    include_once'Aluno.php';
    include_once'Professor';

    $Aluno1 = new Aluno("gabryel","17","Desenvolvimentos de Sistemas.");  
    $Professor2 = new Professor("Wagner","47","Desenvolvimentos de Sistemas.");
    
    echo $Aluno1->apresentar();
    echo $Professor2->apresentar();


    
?>
