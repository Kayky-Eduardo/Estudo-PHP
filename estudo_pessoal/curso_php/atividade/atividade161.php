<?php
function isPrimo($numero) {
  if ($numero <= 1) {
    return false;
  }
  for ($i = 2; $i <= sqrt($numero); $i++) {
    if ($numero % $i == 0) {
      return false;
    }
  }
  return true;
}

$numero = 40;
$primo = isPrimo($numero);
if ($primo == true) {
    echo "O número $numero é primo";
} else {
    echo "O número $numero não é primo";
}
?>