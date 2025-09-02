<?php
# Similar a uma lista

# Criando array
$carro = array('volvo', 'bmw', 'Toyota');
var_dump($carro);

# Acessando array
echo "<br>acessando array Carro índice 0: " . $carro[0];

# Mudando o valor
$carro[1] = 'Ford';
echo "<br>Mudando valor indice 1 e mudando valor: " . $carro[1];

# Loop na array
echo "<br>";
foreach ($carro as $x) {
    echo "$x";
}

/*
Se você tiver uma array, e usar a função embutida do php array_push()
o novo item vai ser enviado para o final da array
*/
array_push($carro, "saveiro");
echo "<br>";
var_dump($carro);
?>