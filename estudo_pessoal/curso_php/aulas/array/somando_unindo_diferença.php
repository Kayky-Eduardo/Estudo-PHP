<?php
$arr = [2, 4, 10, 5, 12, 32];

$soma = array_sum($arr);


$array1 = ["a", 2, ["teste" => "lixo"] , True];
$array2 = ["b", 3, ["nada" => "vagaba"], false];

$arrMerge = array_merge($array1, $array2);

print_r($arrMerge);

$arrC1 = [1, 2, 3, 4, 5];
$arrC2 = [1, 3, 4, 5, 6, 7];


// comparando o 2 em relação ao 1
// resultado:  6 e 7 (porque o arrC2 tem 6 e 7 diferentemente do arrC1)
$diferença = array_diff($arrC2, $arrC1);
print_r($diferença)
?>