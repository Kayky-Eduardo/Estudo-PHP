<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>

<form method="post">
    <label for="escolha">Escolha: </label>
    <input type="text" id="escolha" name="escolha" required>

    <button type="submit">Enviar</button>
</form>


<?php

if (!isset($_SESSION['lista'])) {
    $_SESSION['lista'] = [];
}

echo "<h4>1. Cadastrar</h4>";
echo "<h4>2. Mostrar</h4>";
echo "<h4>3. sair</h4>";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $escolha = isset($_POST['escolha']) ? intval($_POST['escolha']) : null;

    if ($escolha == 1) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = htmlspecialchars($_POST['nome']);
            $idade = htmlspecialchars($_POST['idade']);
            $peso = htmlspecialchars($_POST['peso']);
            $lista[$nome] = ["idade"=>$idade, "peso"=>$peso];
        }
    } elseif ($escolha == 2) {
        echo "Lista atual: ";
        foreach($lista as $x=>$y) {
            echo "$x: $y";
        } 
    } elseif ($escolha == 3) {
        echo "Saindo..";
    } else {
        echo "Opção inválida!";
    }
}
?>