<?php
//cliente
$nome = $_POST['nome'];
//Produto 1
$produto1 = $_POST['produto1'];
$preco1 = $_POST['preco1'];
$quantidade1 = $_POST['quantidade1'];
//produto 2
$produto2 = $_POST['produto2'];
$preco2 = $_POST['preco2'];
$quantidade2 = $_POST['quantidade2'];
//produto 3
$produto3 = $_POST['produto3'];
$preco3 = $_POST['preco3'];
$quantidade3 = $_POST['quantidade3'];
//Array
$produtos = [
    [
        "nome" => $produto1,
        "preco" => $preco1,
        "quantidade" => $quantidade1,
        'subtotal' => $preco1 * $quantidade1
    ],
    [
        "nome" => $produto2,
        "preco" => $preco2,
        "quantidade" => $quantidade2,
        'subtotal' => $preco2 * $quantidade2
    ],
    [
        "nome" => $produto3,
        "preco" => $preco3,
        "quantidade" => $quantidade3,
        'subtotal' => $preco3 * $quantidade3
    ],
];
$total = 0;
foreach($produtos as $produto){
    $subtotal = $produto["preco"] * $produto['quantidade'];
    $total = $total + $subtotal;
}
if ($total > 500){
    $desconto = $total * 0.10;
    $valor_final = $total - $desconto;
}else{
    $desconto = 0;
    $valor_final = $total;
}
require_once "view_relatorio.php";
?>