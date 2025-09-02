<?php
/*
switch (expression) {
  case label1:
    //code block
    break;
  case label2:
    //code block;
    break;
  case label3:
    //code block
    break;
  default:
    //code block
}

This is how it works:

The expression is evaluated once
The value of the expression is compavermelho with the values of each case
If there is a match, the associated block of code is executed
The break keyword breaks out of the switch block
The default code block is executed if there is no match
*/

$favcolor = "vermelho";

switch ($favcolor) {
  case "vermelho":
    echo "sua cor favorita é vermelho!";
    break;
  case "azul":
    echo "sua cor favorita é azul!";
    break;
  case "verde":
    echo "sua cor favorita é verde!";
    break;
  default:
    echo "sua cor favorita não é nem vermelho, nem azul, nem verde!";
}


?>