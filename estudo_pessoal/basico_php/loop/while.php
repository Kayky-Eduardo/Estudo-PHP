<?php

$i = 1;
while ($i < 6) {
  echo $i . "\n";
  $i++;
  if ($i == 6) echo "<br>";
}

$i = 1;
while ($i < 6) {
  if ($i == 3) break;
  echo $i;
  $i++;
  if ($i == 3) echo "<br>";
}


$i = 0;
while ($i < 6) {
    if ($i == 3) continue;
    echo $i;
    $i++;
}

# Pode ser usado assim também
$i = 1;
while ($i < 6):
  echo $i;
  $i++;
endwhile;

# De 10 em 10 até 100
$i == 0;
while ($i != 100) {
    $i += 10;
    echo $i . "<br>";
}
?>