<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <h1>Cadastro de Aluno (com Session)</h1>

        <form action="" method="POST">
            <label for="nome">Insira o nome:</label>
            <input type="text" name="nome" id="nome" required><br>

            <label for="nota1">Digite a 1° nota:</label>
            <input type="number" name="nota1" id="valor" required><br>

            <label for="nota2">Digite a 2° nota:</label>
            <input type="number" name="nota2" id="valor1" required><br>

            <label for="nota3">Digite a 3° nota:</label>
            <input type="number" name="nota3" id="valor2" required><br>

            <label for="nota4">Digite a 4° nota:</label>
            <input type="number" name="nota4" id="valor3" required><br><br>

            <button type="submit" name="enviar">Adicionar Aluno</button>

            <button type="submit" name="limpar" formnovalidate> Limpar lista de Alunos</button><br>
        </form>
        <form action="" method="POST">

        </form>
    </main>
    <?php
    if (!isset($_SESSION['alunos'])) {
        $_SESSION['alunos'] = [];
    };

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST['limpar'])) {
            $_SESSION['alunos'] = [];
        } elseif(isset($_POST['enviar'])) {
            if(isset( $_POST['nome'], $_POST['nota1'], $_POST['nota2'],
            $_POST['nota3'], $_POST['nota1'])) {
                $aluno = [
                    'nome' => $_POST['nome'],
                    'notas' => [
                        (float) $_POST['nota1'],
                        (float) $_POST['nota2'],
                        (float) $_POST['nota3'],
                        (float) $_POST['nota4'],
                    ]
                ];
            }
            $_SESSION['alunos'][] = $aluno;

        }
        if (!empty($_SESSION['alunos'])) {
                echo "<hr>";
                foreach ($_SESSION['alunos'] as $aluno) {
                    $nome = $aluno['nome'];
                    $notas = $aluno['notas'];
                    $soma = array_sum($notas);
                    $media = $soma / count($notas);

                    echo "
                        <h4>$nome</h4>
                        <ol>
                            <li>Nota 1: {$notas[0]}</li>
                            <li>Nota 2: {$notas[1]}</li>
                            <li>Nota 3: {$notas[2]}</li>
                            <li>Nota 4: {$notas[3]}</li>
                            <li>Soma: $soma</li>
                            <li>Média: $media</li>
                        </ol>
                        <hr>
                    ";
                }
            }
        
    }
    ?>
    </table>
</body>

</html>