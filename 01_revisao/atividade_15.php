<?php
$produtos = [
    [
        "nome" => "Camiseta",
        "estoque" => 10
    ],
    [
        "nome" => "Calça Jeans",
        "estoque" => 20
    ],
    [
        "nome" => "Meias",
        "estoque" => 19
    ],
    [
        "nome" => "Tênis",
        "estoque" => 50
    ],
    [
        "nome" => "Boné",
        "estoque" => 5
    ]
];
foreach($produtos as $produto){
     if ($produto["estoque"] > 0) {
        echo "Produto: " . $produto["nome"] . " - Estoque:  " . number_format($produto["estoque"], 0,) . "<br>";
    }
}
?>