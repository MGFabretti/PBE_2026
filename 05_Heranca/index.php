<?php

require_once "Turma.php";

$professor = new Professor("Leonardo", "Leo@gmail.com", "Programação");

$turma = new Turma("INFO",$professor);

$aluno = new Aluno("Mat", "Mat@Gmail.com", "B456");
$aluno->adicionarNota(8);
$aluno->adicionarNota(7);
$aluno->adicionarNota(9);

$aluno2 = new Aluno("Leu", "Leu@Gmail.com", "A123");
$aluno2->adicionarNota(10);
$aluno2->adicionarNota(10);
$aluno2->adicionarNota(9);

$aluno3 = new Aluno("Gab", "Gab@Gmail.com", "C789");
$aluno3->adicionarNota(9);
$aluno3->adicionarNota(8);
$aluno3->adicionarNota(10);

$turma->adicionarAluno($aluno);
$turma->adicionarAluno($aluno2);
$turma->adicionarAluno($aluno3);

$turma->exibirDadosTurma();

$turma->listarAlunos();

$pessoas = [$professor, $aluno, $aluno2];
foreach($pessoas as $pessoa){
    $pessoa->exibirDadosPessoa();
    echo "<hr>";
}