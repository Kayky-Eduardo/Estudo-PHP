<?php

function receberDados($nome, $idade) {
    $nome = "Sr. $nome";
    $idade = "possui $idade anos.";
    return [$nome, $idade];
}

$dados = receberDados("Kayky", "18");
print_r($dados);

// Outra forma de fazer
print_r("$dados[0] você $dados[1]");
?>