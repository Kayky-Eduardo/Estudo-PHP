<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <h1>Resultado</h1>
    <p>
        <?php
            // $_POST['mensagem'] é o valor enviado pelo formulario com metodo post
            if (isset($_POST['valor1'], $_POST['valor2'])) {
                $filtrar = $_POST['filtrar'];
                $valor1 = (htmlspecialchars($_POST['valor1']));
                $valor2 = htmlspecialchars($_POST['valor2']);
                if ($filtrar == "soma") {
                    $somar = $valor1 + $valor2;
                    echo "O resultado da soma dos dois números é: $somar";
                } else if ($filtrar == "subtrair") {
                    $subtrair = $valor1 - $valor2;
                    echo "O resultado da subtração dos dois números é: $subtrair";
                } else if ($filtrar == "multiplicar") {
                    $multiplicar = $valor1 * $valor2;
                    echo "O resultado da multiplicação dos dois números é: $multiplicar";
                } else if ($filtrar == "dividir") {
                    if ($valor2 != 0) {
                        $dividir = $valor1 / $valor2;
                        echo "O resultado da divisão dos dois números é: $dividir";
                    } else {
                        echo "Não é possível dividir por 0";
                    }
                }
            } else {
                echo "Nenhuma valor foi recebido";
            }
        ?>
    </p>

    <a href="index.php">Voltar</a>
</body>

</html>