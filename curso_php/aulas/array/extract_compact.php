<?php

$arry = [
    'nome' => 'kayky',
    'idade' => 18,
    'altura' => 'sei lá',
    'cor' => 'pardo'
];
// extract(array) resgata o par chave:valor da array associativa
// e transforma em uma variável, se houver uma variável já
// criada com o nome da chave, esta variável sera sobreescrita
$cor = 'salsicha';
extract($arry);
echo "$nome, $idade, $cor, $altura";

// compact( ) cria uma array associativa a partir do nome
// das variáveis em string, além disso, é possível atribuirmos
// a uma variável
$marca = 'BMW';
$cor_carro = 'preto';
$motor = "3.0";

$carro = compact("marca", 'cor_carro', "motor");
print_r($carro);
?>