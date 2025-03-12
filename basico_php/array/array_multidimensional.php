<?php
$carros = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

for ($x = 0; $x <= 3; $x++) {
    echo $carros[$x][0].": In stock: ".$carros[$x][1].", sold: ".$carros[$x][2].".<br>";
}

# ou 
for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
      for ($col = 0; $col < 3; $col++) {
        echo "<li>".$carros[$row][$col]."</li>";
      }
    echo "</ul>";
  }
?>