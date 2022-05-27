<?php
$name = readline("Hey. What is your name? (Sorry I keep forgetting) ");
echo"\n";
$age = (int)readline("Ok, ".$name.", How old are you? ");
echo"\n";
if ($age < 16) {
    echo  "You can't drive.";
} else if ($age >= 16 and $age <= 17){
    echo  "You can drive but not vote.";
} else if ($age >=18 and $age <= 24){
    echo "You can vote but not rent a car.";
}
else{
    echo "You can do pretty much anything.";
}
?>