<!DOCTYPE html>
<html>
<body>
    
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    nome: <input type="text" name="nome">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_REQUEST['nome']);
    if (empty($nome)) {
        echo "O nome está vazio.";
    } else {
        echo "Nome" . $nome;
    }
}
?>

</body>
</html>