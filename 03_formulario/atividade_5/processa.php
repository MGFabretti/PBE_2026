<?php
$nome = $_POST['nome'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];

$calcular_IMC = $altura * $altura / $peso;
require_once "view_relatorio.php";
?>