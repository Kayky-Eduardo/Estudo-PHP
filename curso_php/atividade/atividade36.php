<?php

$arry = [];

for ($i=0; $i<=30; $i++) {
    $arry[]= $i;
}
function nova_array($array_antiga) {
    $array_maior= [];
    foreach ($array_antiga as $x) {
        if ($x >= 7) {
            $array_maior[]= $x;
        } else {
            continue;
        }
    
    }
    return $array_maior;
}
$nova_array_m = nova_array($arry);
print_r($nova_array_m);

?>