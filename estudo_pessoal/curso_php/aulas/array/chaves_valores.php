<?php
$arry = [
    'carro' => 'BMW',
    'motor' => 2.4,
    'teto_solar' => true,
    'cambio' => 'manual',
    'portas' => 4
];

// pega somente as chaves e transforma em uma array;
$chave = array_keys($arry);
print_r($chave);

// pega somente os valores e transforma em uma array
$valores = array_values($arry);
print_r($valores);


// verifica se um chave existe
// existem outras formas de manusear esta função,
// pelo que vi ela além de retornar true e false, também pode retorna 0 e 1
if (array_key_exists('cambio', $arry)) {
    echo "<br>A chave existe<br>";
} else {
    echo "A chave não existe";
}

//mesma funcionalidade com semântica diferente
// porém, também é valido para checar se uma variável existe ou não
if (isset($arry['cambio'])) {
    echo "A chave existe";
} else {
    echo "A chave não existe";
}

// por exemplo
if (isset($arry)) {
    echo "<br>A var existe";
} else {
    echo "A var não existe";
}
?>