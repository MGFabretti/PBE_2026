<?php

function calcularPedido($nomeProduto, $precoUnitario, $quantidade, $percentualDesconto = 0, $percentualImposto = 0) {
    $subtotal = $precoUnitario * $quantidade;
    $valorDesconto = $subtotal * ($percentualDesconto / 100);
    $valorImposto = $subtotal * ($percentualImposto / 100);
    $totalFinal = $subtotal - $valorDesconto + $valorImposto;
    
    $resultado = [
        'nome' => $nomeProduto,
        'subtotal' => $subtotal,
        'desconto' => $valorDesconto,
        'imposto' => $valorImposto,
        'total' => $totalFinal
    ];
    
    return $resultado;
}
?>