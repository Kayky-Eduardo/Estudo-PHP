<?php

$texto = "String para testar o método strpos e strrpos; testar";

$encontrando_string = strpos($texto, "testar");
echo $encontrando_string;

$encontrando_string2 = strpos($texto, "teste");

if ($encontrando_string2 == false) {
    echo "\no teste 2 é falso";
} else {
    echo "\no teste 2 é verdadeiro";
}

$palavra = "testar";
$encontrando_string3 = strpos($texto, $palavra);
echo "\nEncontrando com váriavel: $encontrando_string3";

// strpos encontra a primeira ocorrência da palavra, o strrpos encontra o último
$ultima_ocorrencia = strrpos($texto, $palavra);
echo "\nEncontrando a última ocorrência: $ultima_ocorrencia";


// outra função seria o strstr() que retorna o resto da string
$resto_string = strstr($texto, "strrpos");
echo "\nResto da string a partir de strrpos: $resto_string";
?>