<?php
echo "\n";
$height = (float)readline("Your height in m:\n");
$weight = (float)readline("Your weight in kg:\n");
echo "\n";
echo "Your BMI is ".round(($weight/($height*$height)),5);
?>