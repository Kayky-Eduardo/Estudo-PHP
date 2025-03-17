<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>

<form method="post">
    <label for="nome">Nome:</label>
    <input type="text", id="nome", name="nome" required><br><br>

    <label for="idade">idade:</label>
    <input type="text", id="idade", name="idade" required><br><br>
    
    <label for="peso">peso:</label>
    <input type="text", id="peso", name="peso" required>

    <label for="escolha">Escolha: </label>
    <input type="text", id="escolha", name="escolha" required>

    <button type="submit">Enviar</button>
</form>
<?php

$escolha = htmlspecialchars($_POST['escolha']);

while ($escolha != 3); {
echo "1. Cadastrar";
echo "2. Mostrar";
echo "3. sair";

    if ($escolha == 1) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = htmlspecialchars($_POST['nome']);
            $idade = htmlspecialchars($_POST['idade']);
            $peso = htmlspecialchars($_POST['peso']);
            $lista = [$nome=>$idade, $peso];
        }
    } elseif ($escolha == 2) {
        echo "Lista atual: ";
        foreach($lista as $x=>$y) {
            echo "$x: $y";
        } 
    } 




}
/*

    foreach ($lista as $x=>$y) {
        echo "$x : $y";
    }


    if ($escolha == 'Não') {
    echo "lista atual $lista";
    echo "Quem deseja procurar?";
    } else {
        echo "continuando!";
        echo $lista;
    }
}
 */   
?>