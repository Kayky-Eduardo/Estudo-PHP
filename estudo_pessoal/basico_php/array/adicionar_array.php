<?php
$pessoa = ["alan", "francisco", "geigislaine"];
$pessoa[] = "kayky";
var_dump($pessoa);

$pessoa_idade = ["alan" => 31, "francis" =>19, "geigislaine"=>54];
echo "<br>";

var_dump($pessoa_idade);
$pessoa_idade['kayky'] = 18;

echo "<h3>Após a adição da chave kayky: </h3>";
var_dump($pessoa_idade);

$frutas = array("Maçã", "Banana");
array_push($frutas, "Laranja", "Kiwi", "Limão");

$carros = ["marca" => "Ford", "modelo"=>"Mustang"];

echo "<h3>Adicionando múltiplas chaves e valores:</h3>";
$carros += ["cor" => "vermelho", "ano" => 1964];
var_dump($carros)
?>