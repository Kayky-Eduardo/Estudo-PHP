<?php
function somaElementos($numeros) {
    if (count($numeros) <= 1) {
        echo "Precisa ter pelo menos 2 elementos";
        return;
    }
    foreach ($numeros as $value) {
        if(!is_numeric($value)) {
            echo "Insira somente números, por favor!";
            return;
        }
    }
    $soma = array_sum($numeros);
    echo "Soma dos valores é: " . $soma;
    
    
    
}

$arryNumerica = [0, 1, "a"];
somaElementos($arryNumerica);
?>