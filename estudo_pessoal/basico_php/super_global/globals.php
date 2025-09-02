<?php
$x = 75;

# Se eu não usar $GLOBALS vai dar erro ou nada
function funcao() {
echo $GLOBALS['x'] . "\n";
}
funcao();

# Definindo global dentro de uma função
function funcao2() {
    global $x;
    echo $x . "\n";
}

funcao2();

/*
Variáveis criadas nos blocos de código normal são globais,
mas variáveis criadas dentro de funções e classes precisam ser declaradas globais
para serem usadas do lado de fora.
*/
function funcao_global() {
    $GLOBALS["y"] = 100;
}

funcao_global();

echo $GLOBALS["y"] . "\n";
echo $y
?>