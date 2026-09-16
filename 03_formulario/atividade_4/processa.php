<?php

$nome = $_POST['nome'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$media = ($nota1 + $nota2 + $nota3) / 3;

if ($media > 10) {
    $media = 10;
}

if ($media >= 7) {
    $situacao = "Aprovado";
} else {
    $situacao = "Reprovado";
}

if ($media == 10) {
    $mensagem = "Você Atingiu a nota máxima";
} else {
    $mensagem = "";
}

require_once "View_relatorio.php";

?>