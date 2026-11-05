<?php
// Matheus E davi
$nome = $_POST['nome'];
$email = $_POST['email'];
$data = $_POST['data'];
$categoria = $_POST['Categoria'];
$dias = $_POST['qtddias'];
$diaria = 0;
$SeguroTotal = $_POST['seguroTotal']; 
$GPS = $_POST['GPS'];
$caderinhaInfantil = $_POST['caderinhaInfantil'];

function calcularSubtotal($diaria, $dias){
    $diaria * $dias;
}

function calcularPercentualDesconto($dias){
    if($dias >= 1 && $dias <= 6){
        
    }else if($dias >= 7 && $dias <= 14){
        
    }else if($dias >= 15){
        
    }
}

    if($categoria == 'Economico' ){
        $diaria = 100;
    }else if($categoria == 'Intermediário') {
        $diaria = 150;
    }else if($categoria == 'SUV') {
        $diaria = 250;
    }

$diariosAdicionais = 0;

    if($SeguroTotal == 'sim'){
        $diariosAdicionais + 40;
    }else if($GPS == 'sim'){
        $diariosAdicionais + 15;
    }else if($caderinhaInfantil == 'sim'){
        $diariosAdicionais + 20;
    }



$total = calcularSubtotal($diaria, $dias);

$desconto = calcularPercentualDesconto($dias);

$totalPagar = $total - $desconto;

require_once "view_relatorio.php";
?>