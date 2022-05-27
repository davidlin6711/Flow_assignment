<?php
$name = readline("Hey. What is your name? ");
echo"\n";
$age = (int)readline("Ok, ".$name.", How old are you? ");
echo"\n";
if ($age >= 25) {
    echo  "You can do anything that's legal $name.";
} else if ($age >= 18 and age < 25){
    echo  "You can't rent a car $name.";
} else if ($age >=16 and age < 16){
    echo "You can't vote $name.\nYou can't rent a car $name.";
}
else{
    echo "You can't drive $name.\nYou can't vote $name.\nYou can't rent a car $name.";
}
?>