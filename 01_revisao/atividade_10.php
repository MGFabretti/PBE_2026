<?php

$numeros = [10,20,30,40,50,60,70,80,90,100];
$maior = $numeros[0];

foreach ($numeros as $numero){
    if($numero > $maior){
        $maior=$numero;
    }
}
echo "Omaior numero é: ". $maior;
?>