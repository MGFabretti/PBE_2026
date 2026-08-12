<?php
$funcionarios = [
    ["nome" => "Ana Silva", "cargo" => "Desenvolvedora", "salario" => 4500.00],
    ["nome" => "Bruno Costa", "cargo" => "Designer", "salario" => 3200.00],
    ["nome" => "Carlos Souza", "cargo" => "Gerente de Projetos", "salario" => 2500.00],
    ["nome" => "Diana Ramos", "cargo" => "Suporte Técnico", "salario" => 1800.00]
];

$totalFuncionarios = count($funcionarios);
$somaSalarios = 0;

echo "=== Informações dos Funcionários ===<br>";

foreach ($funcionarios as $funcionario) {
    echo "Nome: " . $funcionario['nome'] . "  <br>";
    echo "Cargo: " . $funcionario['cargo'] . "  <br>";
    echo "Salário: R$ " . number_format($funcionario['salario'], 2, ',', '.');
    
    $somaSalarios += $funcionario['salario'];
}

echo "-----------------------------------<br>";

echo "Total de funcionários cadastrados: " . $totalFuncionarios;

echo "Soma total dos salários: R$ " . number_format($somaSalarios, 2, ',', '.');
?>
