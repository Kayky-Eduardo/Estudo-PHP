<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css"/>
</head>

<body>
    <h1>Calcular</h1>

    <div class="caixa">
        <form action="processa.php" method="POST">
            <label>Digite o primeiro valor:</label><br>
            <input type="number" name="valor1" required>

            <label>Digite o segundo valor:</label><br>
            <input type="number" name="valor2" required>

            <label for="filtrar">Escolha a operação</label>

            <select name="filtrar">
                <option value="soma">Somar</option>
                <option value="subtrair">Subtrair</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="dividir">Dividir</option>
            </select>
            <br>
            <button type="submit">Enviar</button>
        </form>
    </div>
    
</body>

</html>