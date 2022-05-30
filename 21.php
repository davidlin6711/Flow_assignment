<?php
echo "\n";
$height = (float)readline("Your height in m:\n");
$weight = (float)readline("Your weight in kg:\n");
echo "\n";
$BMI = round(($weight/($height*$height)),5);
echo "Your BMI is $BMI\n";
if ($BMI < 18.5) {
    echo "BMI category: Under weight";
} else if ($BMI <= 24.9) {
    echo "BMI category: Normal weight";
} else if ($BMI <= 29.9) {
    echo "BMI category: Overweight";
} else {
    echo "Obese";
}
?>