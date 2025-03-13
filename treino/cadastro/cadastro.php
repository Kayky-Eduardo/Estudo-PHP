<?php
$lista = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $lista[] = $nome . "-" . $email;
    // Exibir os dados
echo "Nome: " . htmlspecialchars($nome) . "<br>";
echo "Email: " . htmlspecialchars($email) . "<br>";
} else {
   echo "Nenhum dado enviado.";
}

echo "<br><br><b>Conteúdo da lista:</b><br>";
echo "<pre>";
print_r($lista);  
echo "</pre>";
?>