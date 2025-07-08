<?php

$arr = [1, "texto1", 2.12, "texto2", True, "texto3", "texto4", 0.12, "texto5"];

$x = 0;
while ($x < count($arr)) {
    if(is_string($arr[$x])) {
        echo $arr[$x] . "<br>";
    }
    $x+=1;
}


for ($x = 0; $x < count($arr); $x++) {
    if(is_string($arr[$x])) {
        echo $arr[$x];
    }
}
?>