<?php
// Cavalos
$arr = [
    'meio-branco-meio-preto' => 1900,
    'branco' => 905,
    'preto' => 995,
    'Malhado' => 3600,
    'cinza' => 995
];

function novaArray ($arr) {
    $arrayitensnovos = [];
    foreach($arr as $item => $preco) {
        if ($preco >= 995) {
            $arrayitensnovos[$item] = $preco;
        }
    }
    echo "valores acima de 995: \n";
    return $arrayitensnovos;
}

$novaarray = novaArray($arr);

print_r($novaarray);