<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        input[type="text"], input[type="number"] {
            padding: 8px;
            margin: 5px 0;
            width: 100%;
            max-width: 300px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <!--Cabeçalho do Site-->
    <header>
        
    </header>

    <!--Container para o conteúdo-->
    <main>
        <h1>Cadastro de Aluno</h1>
        <form method="POST">
            <label>Nome do aluno:</label>
            <input type="text" name="nome" required><br>

            <label>Nota 1: </label>
            <input type="number" name="nota1" steap="0.01" required><br>
            
            <label>Nota 2: </label>
            <input type="number" name="nota2" steap="0.01" required><br>

            <label>Nota 3: </label>
            <input type="number" name="nota3" steap="0.01" required><br>

            <label>Nota 4: </label>
            <input type="number" name="nota4" steap="0.01" required><br>
       
            <input type="submit" value="Cadastrar">
        </form>
    </main>

    <!--Rodapé da página-->
    <footer>
        
    </footer>

    <!--Javascript-->
    
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $aluno = [
        'nome' => $_POST['nome'],
        'nota1' => (float) $_POST['nota1'],
        'nota2' => (float) $_POST['nota2'],
        'nota3' => (float) $_POST['nota3'],
        'nota4' => (float) $_POST['nota4'],
    ];

    echo "<hr>";

    echo "<h2>Resultado:</h2>";

    echo "<h3>Aluno: " . htmlspecialchars($aluno['nome']) .  "</h3>";

    $soma_notas = 0;
    $qtd_notas = 0;

    foreach ($aluno as $key => $value) {
        # code...
        if ($key !== 'nome' && is_numeric($value)) {
            echo "$key: $value<br>";
            $soma_notas += $value;
            $qtd_notas++;
            $media = $soma_notas / $qtd_notas;

            echo "<br><strong>Soma das Notas:</strong> $soma_notas<br>";

            echo "<strong>Média</strong> " . number_format($media, 2, ',', '.');
        }
    }
}
