<?php
$nome = $_POST['nome'];
$Salario_bruto = $_POST['Salario_bruto'];
$Valor_total_de_descontos = $_POST['Valor_total_de_descontos'];
$horas_extras = $_POST['Quantidade_de_horas_extras'];
$beneficios = $_POST['Valor_total_de_beneficios'];

$valor_hora = $Salario_bruto/160;
$valor_hora_extra = $valor_hora * 1.5;
$total_horas_extras = $horas_extras * $valor_hora_extra;
$salario_bruto_sem_descontos = $Salario_bruto + $total_horas_extras + $beneficios;
$salario_liquido = $Salario_bruto + $horas_extras + $beneficios - $Valor_total_de_descontos;

echo "<br>";  
echo "Nome do Funcionario:" . $nome;
echo "<br>";
echo "Salario bruto:" . $Salario_bruto;
echo "<br>";
echo "Salario bruto + Total com horas extras + beneficios: R$" . $salario_bruto_sem_descontos;
echo "<br>";
echo "Desconto total: R$" . $Valor_total_de_descontos;
echo "<br>";
echo "Salario Liquido:" . $salario_liquido;
echo "<br>";

if ($Salario_bruto >= 5000){
    $imposto = $salario_bruto_sem_descontos * 10/100;
}else if ($Salario_bruto >= 3000){
    $imposto = $salario_bruto_sem_descontos * 5/100;
}else{
    $imposto = 0;
}
$salario_liquido = $salario_bruto_sem_descontos - $imposto;

echo "<br>";
if ($salario_liquido > 4000){
    echo " Status: Bem remunerado";
}else{
    echo "Status: Medio";
}
?>