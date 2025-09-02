<?php

function encontrarPares ($array) {
    $nova_array = [];
    if (count($array) <= 0) {
        echo "Insira pelo menos 1 elemento";
        return;
    }
    foreach ($array as $valores){
        if ($valores % 2 == 0) {
            $nova_array[] = $valores;
        }
    }
    return $nova_array;
}

$arry_numerica = [1, 2, 3, 4, 56, 67];
$array_par = encontrarPares($arry_numerica);
print_r($array_par);
?>