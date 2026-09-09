<?php

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacao = $_POST['Operacao'];


if ($operacao == "+") {
    $resultado = $numero1 + $numero2;
    $operacao = "Adição";

}elseif ($operacao == "-") {
    $resultado = $numero1 - $numero2;
    $operacao = "Subtração";

}elseif ($operacao == "*") {
    $resultado = $numero1 * $numero2;
    $operacao = "Multiplicação";

}elseif ($operacao == "/") {
    $resultado = $numero1 / $numero2;
    $operacao = "Divisão";

}else {
    $resultado = "Operação inválida";
    $operacao = "Inválida";
}

echo "Operação: " . $operacao . " entre " . $numero1 . " e " . $numero2;
echo "<br>";
echo "Resultado: " . $resultado;

?>