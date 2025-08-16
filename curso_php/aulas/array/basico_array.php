<?php

$arry = [];

//adicionando item, pode colocar em qualquer indíce desejado
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
$arry_numerica = range(1, 16);
print_r($arry_numerica);

//numero de items na array
echo "quantidade de elementos na array numerica: ". count($arry_numerica);

$slice1 = array_slice($arry_numerica, 1, 7);
echo "\nslice 1: ";
print_r($slice1);

print_r($arry_numerica);

$slice2 = array_slice($arry_numerica, 4, 6);
echo "\nslice 2: ";
print_r($slice2);

// remove elementos a partir do indice e resgata os mesmos
// seria como tirar da array e colocar e criar outra baseado no que você tirou se for desejado
// porem tem como apenas tirar e não criar outra variavel
// a partir do indice 1 remove 2 elementos
$splice = array_splice($arry_numerica, 1, 2);
print_r($arry_numerica)
?>