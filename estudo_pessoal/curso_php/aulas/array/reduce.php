<?php
$arr = range(1, 10);

function soma ($a, $b) {
    return $a + $b;
}

$resultado = array_reduce($arr, "soma");

echo "$resultado";

?>