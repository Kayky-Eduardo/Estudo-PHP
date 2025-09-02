<?php

# Similar a um dicionario
$carro = array("marca"=>"Ford", "modelo"=>"mustang", "ano"=>1964);
echo "Modelo: " . $carro["modelo"];

$carro["ano"] = 2025;
echo "<br>" . "Ano: " . $carro["ano"];

var_dump($carro);

foreach ($carro as $x => $y) {
    echo "$x : $y<br>";
}
?>