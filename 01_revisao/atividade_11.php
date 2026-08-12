<?php
$idades = [1, 2, 3, 24, 65, 36, 47, 18];

$soma = 0;
$maiorDeIdade = 0;
$totalPessoas = count($idades);


foreach ($idades as $idade) {
    
    $soma = $soma + $idade;
    
    
    if ($idade >= 18) {
        $maiorDeIdade++;
    }
}


$media = $soma / $totalPessoas;

echo "A média das idades é: " . $media . "<br>";
echo "Pessoas com 18 anos ou mais: " . $maiorDeIdade;
?>