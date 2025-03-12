<?php
/*
com a função array_splice()você específica o indice(onde começa)
e quantos itens você deseja deletar, ou seja, array_splice($carros, indice, qntd_deletar)
Após deletar a array é re-indexada automaticamente começando do índice 0
*/
$carros = ["Volvo", "BMW", "Toyota"];
array_splice($carros, 1, 1);

# ou com o uso da função unset

unset($carros[2]);


# Com lista associada
$carro = ["marca" => "Ford", "modelo" => "Mustang", "ano" => 1964];
unset($carro["model"]);

/*
com array_diff dá para criar uma nova array a partir da primeira
podendo tirar algumasns itens da array por mencionar seus valores
*/

$nova_array = array_diff($carro, ["Mustang", 1964]);
print_r($nova_array);

echo "<h3>array principal:</h3>";
print_r($carro);


echo "<h3>array_pop() retira o ultimo item da array:</h3>";
array_pop($carro);
print_r($carro);

echo "<h3>array_shift() retira o primeiro item da array:</h3>";
array_shift($carro);
print_r($carro);

?>