<?php
$num1 = 10;
$num2 = 5;
$operacao = '+';

switch ($operacao) {
    case '+':
        $resultado = $num1 + $num2;
        echo "Resultado: $resultado";
        break;
    case '-':
        $resultado = $num1 - $num2;
        echo "Resultado: $resultado";
        break;
    case '*':
        $resultado = $num1 * $num2;
        echo "Resultado: $resultado";
        break;
    case '/':
        if ($num2 == 0) {
            echo "Erro: Divisão por zero não é permitida.";
        } else {
            $resultado = $num1 / $num2;
            echo "Resultado: $resultado";
        }
        break;
    default:
        echo "Operação inválida.";
}
?>