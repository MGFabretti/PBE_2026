<?php

function analiseAluno($nota1, $nota2, $nota3) {
    $media = ($nota1 + $nota2 + $nota3) / 3;
    if ($media >=7){
        $situacao = "aprovado";
    }elseif ($media >= 5){
        $situacao = "Recuperação";
    }else{
         $situacao = "Reprovado";
    }
    $maiorNota =max($nota1, $nota2, $nota3);
    $menorNota =min($nota1, $nota2, $nota3);
    return [
        "media" => $media,
        "situacao" => $situacao,
        "maiorNota" => $maiorNota,
        "menorNota" => $menorNota,
    ];
}
$resultado = analiseAluno(8, 6, 9);
echo "Número analisado: " . $resultado["media"] . "<br>";
echo "O dobro é: " . $resultado["situacao"] . "<br>";
echo "O triplo é: " . $resultado["maiorNota"] . "<br>";
echo "O quadrado é: " . $resultado["menorNota"] . "<br>";
?>