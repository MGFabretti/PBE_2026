<?php
$nome = $_POST['nome'];
$filme = $_POST['filme'];
$qtd_ingressos = $_POST['ingressos'];
$tipo_ingresso = $_POST['tipo'];

if ($tipo_ingresso == 'inteira'){
    $valor_individual = 50;
}else if ($tipo_ingresso == 'meia'){
    $valor_individual = 25;
}
$total = $valor_individual * $qtd_ingressos;
if ($qtd_ingressos > 100){
    $total = $total - ($total * 0.10);
}
require_once "view_relatorio.php";
?>