<?php
$cliente     = $_POST['cliente'] ?? '';
$material    = $_POST['material'] ?? '';
$peso        = floatval($_POST['peso'] ?? 0);
$quantidade  = intval($_POST['quantidade'] ?? 0);
$maquina     = $_POST['maquina'] ?? '';
$minutos     = intval($_POST['minutos'] ?? 0);
$acabamento  = $_POST['acabamento'] ?? '';
$urgente     = $_POST['urgente'] ?? '';

$precosMateriais = [
    'Aço 1045'        => 35.50, 
    'Alumínio 6351'   => 45.00, 
    'Latão'           => 62.00  
];

$precosMaquinas = [
    'Torno convencional' => 80.00,  
    'Torno CNC'          => 150.00, 
    'Centro de usinagem' => 220.00  
];

$precosAcabamentos = [
    'Sem acabamento' => 0.00,
    'Zincagem'       => 12.00, 
    'Anodização'     => 25.00  
];

function calcularMaterial($peso, $precoKg, $quantidade) {
    return $peso * $precoKg * $quantidade;
}

function calcularMaquina($minutos, $valorHora, $quantidade) {
    $horasPorPeca = $minutos / 60;
    return $horasPorPeca * $valorHora * $quantidade;
}

$precoKgMaterial = $precosMateriais[$material] ?? 0;
$valorHoraMaquina = $precosMaquinas[$maquina] ?? 0;
$precoUnitAcabamento = $precosAcabamentos[$acabamento] ?? 0;

$custoMaterial = calcularMaterial($peso, $precoKgMaterial, $quantidade);
$custoMaquina  = calcularMaquina($minutos, $valorHoraMaquina, $quantidade);
$custoAcabamento = $precoUnitAcabamento * $quantidade;

$partesCusto = [
    'material'   => $custoMaterial,
    'maquina'    => $custoMaquina,
    'acabamento' => $custoAcabamento
];

$custoTotal = 0;
foreach ($partesCusto as $tipo => $valor) {
    $custoTotal += $valor;
}

$desconto = 0;
$acrescimo = 0;

if ($urgente === 'Sim') {
    $acrescimo = $custoTotal * 0.15;
}

if ($quantidade > 50) {
    $desconto = $custoTotal * 0.05;
}

$valorFinal = $custoTotal + $acrescimo - $desconto;

require_once "view_relatorio.php";
