<?php

function calcularPrecoFinal($preco, $quantidade, $desconto) {
    $totalBruto = $preco * $quantidade;
    $valorDesconto = $totalBruto * ($desconto / 100);
    $precoFinal = $totalBruto - $valorDesconto;
    
    return $precoFinal;
}

$resultado = calcularPrecoFinal(50.00, 3, 10);
echo "Preço final: R$ " . number_format($resultado, 2, ',', '.');

?>