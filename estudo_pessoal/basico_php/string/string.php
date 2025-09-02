<?php

// strlen() checa o len da string
$frase = " Esta é uma frase para brincar ";
echo "frase: $frase<br>";
echo "Tamanho: " . strlen($frase) . "<br>";

// str_word_count() faz a contagem do número de palavras na string
echo "nº de palavras: " . str_word_count($frase) . "<br>";

/* strpos procura por uma palavra numa frase e retorna
 o indice que começa a palavra, e se não estiver presente retorna falso*/
echo strpos($frase, "é");
echo strpos($frase, "existe?");

// transforma todas as letras na frase em uppercase
echo "<br>Uppercase: " . strtoupper($frase);
echo "<br>Lowercase: " . strtolower($frase);

// srt_replace() troca um texto para outro
echo "<br>Trocando frase por texto ==> " . str_replace("Esta é uma frase", "Este é um Texto", $frase);

// strrev() vira a palavra ao contrário
echo "<br>Frase ao contrário: " . strrev($frase);
echo "<br>Tirando os espaços em branco: " . trim($frase) . "<br>";

// explode() transforma uma string para uma lista indice por palavra
$lista = explode(" ", $frase);

print_r($lista);
// concatendo geralmente usa o .(dot) igual ao echo
$concatenacao = $frase . " poderia ser uma variavel aqui";
echo "<br>$concatenacao<br>";
echo "frase cortada por indíces(5 palavras após o indíce 6): " . substr($frase, 6, 10) . "<br>";
echo "frase cortada até o final(6 até o final): " . substr($frase, 6) . "<br>";
echo "frase cortada ao contrário(-5 até 3 caracteres): " . substr($frase, -5, 3) . "<br>";
echo "frase cortada ao contrário(5 até -3 caracteres): " . substr($frase, 5, -3) . "<br>";
echo "dá pra usar aspas-dupla desta forma: \"assim\"<br>"
/*
\'	Single Quote	
\"	Double Quote	
\$	PHP variables	
\n	New Line
 */
?>