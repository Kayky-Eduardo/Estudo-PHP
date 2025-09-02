<?php
$carro = ["Volvo", "BMW", "Toyota"];
$carro[1] = "Ford";

$meu_carro = ["marca" => "Ford", "modelo" => "Mustang", "ano" => 1964];
$meu_carro["ano"] = 2024;

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}
unset($x);
var_dump($cars);
?>