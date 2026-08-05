<?php
$a = 1;
$b = -5;
$c = 6;

if ($a == 0) {
    echo "O valor de 'a' não pode ser igual a zero em uma equação de segundo grau.";
} else {
    $delta = ($b * $b) - (4 * $a * $c);

    echo "Coeficientes: a = $a, b = $b, c = $c";
    echo "Valor de Delta: $delta\n";

    if ($delta < 0) {
        echo "A equação não possui raízes reais porque o Delta é negativo.";
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        echo "A equação possui uma única raiz real: X = " . $x;
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "A equação possui duas raízes reais:";
        echo "X1 = " . $x1 . "\n";
        echo "X2 = " . $x2 . "\n";
    }
}
?>
