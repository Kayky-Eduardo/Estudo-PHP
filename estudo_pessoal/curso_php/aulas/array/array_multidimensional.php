<?php
$arry1 = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
print_r($arry1);
print_r($arry1[1][2]); // acessando o indice 2 dentro da primeira array

echo "\n";
$arry2 = [ "arry3" => [1, 2, 3]];
print_r($arry2["arry3"][1]); // acessando o indice 1 dentro da primeira array array2 ---> array3 -> [1, 2(indice 1), 3]
?>