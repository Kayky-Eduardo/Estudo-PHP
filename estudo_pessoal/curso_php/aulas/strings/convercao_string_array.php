<?php
$texto = "Texto qualquer para testar";

$string_para_array = explode(" ", $texto);
print_r($string_para_array);

$array_para_string = implode(" ", $string_para_array);
echo $array_para_string;
?>