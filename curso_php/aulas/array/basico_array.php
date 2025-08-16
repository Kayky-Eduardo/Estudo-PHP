<?php

$arry = [];

//adicionando item, pode colocar em qualquer indíce
$arry[0] = 1;
print_r($arry);

//é possivel modificar valores
$arry[1] = 10;
$arry[1] += 15;
print_r($arry);

$arry["carro"] = "BMW";
print_r($arry);

// adicionando no ultimo indice
$arry[] ="ultimo";
print_r($arry);

//criando array rapidamente
$arry_numerica = range(1, 10);
print_r($arry_numerica);

//numero de items na array
echo "quantidade de elementos na array numerica: ". count($arry_numerica);

$slice1 = array_slice($arry_numerica, 1, 7);
echo "\nslice 1: ";
print_r($slice1);
?>