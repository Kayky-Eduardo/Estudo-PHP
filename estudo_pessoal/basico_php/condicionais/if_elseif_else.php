<?php
/*
if (condic$ao) {
  // codigo que v$ai ser execut$ado se $a condição for verd$adeir$a;
}
*/

$a = 10;

# condicional if com and(&&)
if (5 < $a and $a == 10) {
    echo "Tenha um bom dia!<br>";
  } 

# Condicional if com or(||) e else
if ($a < 5 or $a > 15) {
  echo "chefe é chefe né pai!";
} else {
  echo "chefe não é chefe!";
}

if ($a == 5 or $a > 10) {
  echo "não vai ser executado!";
} elseif ($a != 30 && $a == 10) {
  echo "vai ser executado, porque ambos são verdade!";
} else {
  echo "Não vai chegar aqui!";
}

# IF CURTO
if ($a == 10) $b = 20;

# IF ELSE CURTO
$c = $a < 10 ? "oi" : "tchau";

# if dentro de if
$d = 13;

if ($d > 10) {
  echo "<br>maior que 10";
  if ($d > 20) {
    echo " e também maior que 20";
  } else {
    echo " menor que 20";
  }
}


?>