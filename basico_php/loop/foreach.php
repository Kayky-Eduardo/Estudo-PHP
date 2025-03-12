<?php
# O foreach loop geralmente é usado em array

echo "<h3>loop 1:</h3>";
$cor = array("vermelho", "verde", "azul", "amarelo");

foreach ($cor as $x) {
    echo "$x <br>";
}

echo "<h3>loop 2:</h3>";
$membros = array("scott"=>9, "Kayky"=>18, "padrão"=>0);

foreach ($membros as $x => $y) {
    echo "$x : $y <br>";
}

class Carro {
    public $cor_carro;
    public $marca;
    public function __construct($cor_carro, $marca) {
        $this->cor_carro = $cor_carro;
        $this->marca = $marca;
    }
}

echo "<h3>loop 3:</h3>";
$meu_carro = new Carro("Preto", "volks");
foreach ($meu_carro as $x => $y) {
    echo "$x : $y<br>";
}

echo "<h3>loop 4:</h3>";
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
}

/*
When looping through the array items, any changes done to the array item will,
by default, NOT affect the original array:
*/
echo "<h3>loop 5:</h3>";
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") $x = "pink";
  echo "$x<br>";
}
var_dump($colors);

/*
BUT, by using the & character in the foreach declaration, the array item is assigned by reference,
which results in any changes done to the array item will also be done to the original array:
*/
echo "<h3>loop 6:</h3>";
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as &$x) {
  if ($x == "blue") $x = "pink";
  echo "$x<br>";
}
var_dump($colors);
?>