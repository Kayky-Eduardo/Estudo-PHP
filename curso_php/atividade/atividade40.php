<?php

$str= "O rato roeu a roupa do rei de roma";

$soma_a = 0;
for ($i=0; $i<strlen($str); $i++) {
    if ($str[$i] == "a") {
        $soma_a += 1;
    }
}
echo "O número de vezes que a letra 'a' aparece é $soma_a"
?>