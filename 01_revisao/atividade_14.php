<?php
$produtos = [
    [
        "nome" => "Camiseta",
        "preco" => 59.90
    ],
    [
        "nome" => "Calça Jeans",
        "preco" => 20.00
    ],
    [
        "nome" => "Meias",
        "preco" => 19.99
    ],
    [
        "nome" => "Tênis",
        "preco" => 50.00
    ],
    [
        "nome" => "Boné",
        "preco" => 5.50
    ]
];
foreach($produtos as $produto){
     if ($produto["preco"] < 100) {
        echo "Produto: " . $produto["nome"] . " - Preço: R$ " . number_format($produto["preco"], 2, ',', '.') . "<br>";
    }
}
?>