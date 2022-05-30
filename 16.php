<?php
$gender = readline("What is your gender? (M or F):\n");
$f_name = readline("First name:\n");
$l_name = readline("Last name:\n");
$age = (int)readline("Age:\n");
echo"\n";
if ($gender === "F" and $age >= 20){
    $status = readline("Are you married $f_name? (y or n)?\n");
    echo "\n";
    if ($status === "y"){
        echo "Then I shall call you Mrs. $l_name.";
    }
    else {
        echo "Then I shall call you Ms. $l_name.";
    }
}
else if($age >= 20) {
    echo "Then I shall call you Mr. $l_name.";
}
else {
    echo "Then I shall call you $f_name $l_name.";
} 
?>