<?php

$arr = [
    "Enzo" => 9,
    "robson" => 9,
    "carniça" => 10  
];
echo "<pre>";
print_r($arr);
echo "</pre>";
foreach($arr as $posicao => $valor){
    echo " posição <strong>". $posicao . " </strong Texto strong>". $valor . " </strong>";
    echo "</br>";
} 
?>