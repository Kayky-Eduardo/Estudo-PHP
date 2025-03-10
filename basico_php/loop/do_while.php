<?php
# A diferença do do while e while padrão, é q o do while
# verifica o final de cada loop e o while normal verifica no começo, ou seja,
# no do while a primeira vez sempre será executada
$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);



?>