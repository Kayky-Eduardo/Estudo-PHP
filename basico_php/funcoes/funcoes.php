
<?php

# Função com argumento
function familyName($fname) {
  echo "$fname clinton.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");


echo date("d-m-y h:i:s") . '<br>';

$email = "teste@dominio.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email válido";
} else {
    echo "Email inválido";
}

?>