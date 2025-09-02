<?php
$arry = [
    'nome' => 'kayky',
    'idade' => 18,
    'altura' => 'sei lá',
    'cor' => 'pardo'
];

//  se usar só 1 elemento no for each. Ex:
// foreach($arry as $value)
// faz com que o foreach pegue só o valor
foreach ($arry as $chave => $valor) {
    # code...
    echo "$chave => $valor";
}
?>