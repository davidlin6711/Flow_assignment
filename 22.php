<?php
echo "X\tY\t\n";
echo "----------------\n";
$x = -10;
while ($x <= 10){
    $y = round($x * $x, 1);
    echo "$x\t$y\n";
    $x += 0.5;
}
?>