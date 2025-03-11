<?php
/* A diferença do do while e while padrão, é q o do while
verifica o final de cada loop e o while normal verifica no começo, ou seja,
no do while a primevai vez sempre será executada */

$i = 1;

# faça (codigo) enquanto (condição) ser verdade
echo "exiba i até ser igual ou maior que 6: <br>";
do {
  echo $i;
  $i++;
} while ($i < 6);
echo "<br>";

$i = 8;

echo "vai exibir o i uma vez devido a condição ser falsa: <br>";
do {
  echo $i;
  $i++;
} while ($i < 6);
echo "<br>";

$i = 0;

echo "vai parar o código se i for igual a 3: <br>";
do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);
echo "<br>";

$i = 0;
echo "vai pular o número 3 se i for igual a 3: <br>";
do {
  if ($i == 3) continue;
  echo $i;
  $i++;
} while ($i < 6);
echo "<br>"
?>