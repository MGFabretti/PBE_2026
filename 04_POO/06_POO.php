<?php

class aluno {
    public $nome;
    public $nota1;
    public $nota2;
    public $media;

    function __construct($nome, $nota1, $nota2) {
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->media = $this->calcularMedia($nota1, $nota2);
    }
    function calcularMedia($nota1, $nota2) {
    $media = ($nota1 + $nota2) / 2;
    return $media; 
    }
}

$aluno1 = new aluno("Enzo", 6, 7);

echo "Nome: " . $aluno1->nome . "<br>";
echo "Nota1:  " . $aluno1->nota1 . "<br>";
echo "Nota2:  " . $aluno1->nota2 . "<br>";
echo "Média:  " . $aluno1->media . "<br>";
echo "<br>";

$aluno2 = new aluno("Matheus", 6, 7);

echo "Nome: " . $aluno2->nome . "<br>";
echo "Nota1:  " . $aluno2->nota1 . "<br>";
echo "Nota2:  " . $aluno2->nota2 . "<br>";
echo "Média:  " . $aluno2->media . "<br>";
echo "<br>";
?>