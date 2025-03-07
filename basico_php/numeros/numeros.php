<?php
$a = 5; // inteiro
$b = 5.34;  // float
$c = "25"; // string numeral

/*
PHP_INT_MAX - The largest integer supported
PHP_INT_MIN - The smallest integer supported
PHP_INT_SIZE -  The size of an integer in bytes

MESMA COISA PARA FLOAT
*/

// para checar se é inteiro
var_dump(is_int($a));
var_dump(is_int($b));

# NaN stands for Not a Number.
var_dump(is_nan($a));

// is_numeric() para checar se é número
var_dump(is_numeric($c));

// exemplo de casting
$int_cast = (int)$b;
echo "<br>casting pra int: " . $int_cast;

echo "<br>Menor número: " . (min(0, 150, 30, 20, -8, -200)) ;
echo "<br>Maior número: " . (max(0, 150, 30, 20, -8, -200)) . "<br>";

# The abs() function returns the absolute (positive) value of a number:
echo "Valor inicial: -6.7<br>valor após a função: " . (abs(-6.7));

echo "<br>Valor da raiz quadrada de 64: " . sqrt(64)
# testando
?>