<?php
$weight = (float)readline("Please enter your current earth weight: ");
echo"\n";
echo "I have information for the following planets: \n\t1. Venus   2. Mars    3. Jupiter\n\t4. Saturn  5. Uranus  6. Neptune\n";
echo"\n";
$planet_number = (int)readline("What planet are you visiting? ");
echo"\n";
if ($planet_number === 1){
    $gravity = 0.78;
} else if ($planet_number === 2){
    $gravity = 0.39;
} else if ($planet_number === 3){
    $gravity = 2.65;
} else if ($planet_number === 4){
    $gravity = 1.17;
} else if ($planet_number === 5){
    $gravity = 1.05;
} else if ($planet_number === 6){
    $gravity = 1.23;
}
echo "Your weight would be ".($weight*$gravity)." on that planet.";
?>