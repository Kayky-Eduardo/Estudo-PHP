<?php
/*
for (expression1, expression2, expression3) {
    // code block
    }
*/

/* EXEMPLO:
expression1 is evaluated once
expression2 is evaluated before each iteration
expression3 is evaluated after each iteration
*/


/* EXPLICAÇÃO:
A primeira expressão, $x = 0;, é avaliada uma vez e coloca o contador para 0.
Seguna expressão, $x <= 10;, é avaliada antes de cada iteração,
e o bloco de código só é executado se essa expressão for avaliada verdadeira.
neste exemplo a expressão é verdade enquanto $x for menor ou igual a 10.
Terceira expressão, $x++;, é avaliada a cada iteração,
e neste exemplo, a expressão aumenta o valor de $x em 1 a cada iteração.
*/
for ($x = 0; $x <= 10; $x++) {
    echo "O número é: $x <br>";
}




?>