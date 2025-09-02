<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css"/>
</head>

<body>
    <h1>Bem-vindo ao PHP</h1>

    <form action="" method="GET">
        <label>Digite sua mensagem:</label><br>
        <input type="text" name="mensagem" required>
        <button type="submit">Enviar</button>
    </form>
    <p>
        <?php
            // pega o valor de mensagem e verifica se esta declarado(isset)
            if (isset($_GET['mensagem'])) {
                // armazena o que foi digitado, htmlspecialchars impede codigos maliciosos
                $mensagem = htmlspecialchars($_GET['mensagem']);

                echo "Você digitou: <strong>$mensagem</strong>";

            } else {
                echo "Olá, mundo! Este é meu primeiro código em PHP.";
            }
        ?>
    </p>
    <script src="js/script.js"></script>
</body>

</html>