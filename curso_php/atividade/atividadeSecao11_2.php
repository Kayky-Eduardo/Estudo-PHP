<?php

function maiorElemento($array) {
    rsort($array);
    echo "maior elemento: " . $array[1];
}

$arry = [1, 2, 3, 45, 6, 7, 8, 0];
maiorElemento($arry)
?>