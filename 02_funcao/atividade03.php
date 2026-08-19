<?php

function analiseNumero($numero) {
    $dobro = $numero * 2;
    $triplo = $numero * 3;
    $quadrado = $numero * $numero;

    if ($numero >= 0) {
        $tipo = "Positivo";
    } else {
        $tipo = "Negativo";
    }

    return [
        "numero" => $numero,
        "dobro" => $dobro,
        "triplo" => $triplo,
        "quadrado" => $quadrado,
        "tipo" => $tipo
    ];
}
$resultado = analiseNumero(5);
echo "Número analisado: " . $resultado["numero"] . "<br>";
echo "O dobro é: " . $resultado["dobro"] . "<br>";
echo "O triplo é: " . $resultado["triplo"] . "<br>";
echo "O quadrado é: " . $resultado["quadrado"] . "<br>";
echo "O número é: " . $resultado["tipo"] . "<br>";

?>