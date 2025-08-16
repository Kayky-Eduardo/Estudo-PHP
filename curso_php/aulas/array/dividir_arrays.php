<?php
$arry = range(1, 20);
$nova_arry = array_chunk($arry, 5);

echo $nova_arry[0][1];
print_r(array_chunk($arry, 5));

?>
