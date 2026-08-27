<?php

require_once 'funcao.php';

$meuPedido = calcularPedido('Teclado', 50.00, 3, 10, 5);

echo "Produto: " . $meuPedido['nome'] . "<br>";
echo "Subtotal: R$ " . $meuPedido['subtotal'] . "<br>";
echo "Desconto: R$ " . $meuPedido['desconto'] . "<br>";
echo "Imposto: R$ " . $meuPedido['imposto'] . "<br>";
echo "Total Final: R$ " . $meuPedido['total'] . "<br>";

$totalcomfrete = calcularFrete($meuPedido['total']);
echo "total com frete". $totalcomfrete;
?>