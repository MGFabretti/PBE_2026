<?php
$arr = [
    "NOME" => "Matheus Gabriel Fabretti",
    "CPF"=> 44688479808,
    "TELEFONE" => 1998609-1743,
    "ENDEREÇO" => "Rua capitão joaquim frauzino pereira"

];
echo "<pre>";
print_r($arr);
echo"</pre>";

foreach($arr as $posicao => $valor){
    echo "posição <strong> ". $posicao . "</strong Texto strong> " . $valor . "</strong>";
    echo "</br>";
}
?>