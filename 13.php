<?php
echo "TWO QUESTIONS!\nThink of an object, and I'll try to guess it.\n";
echo"\n";

echo "Question 1) Is it animal, vegetable, or mineral? ";
echo"\n";
$Q1 = readline("> ");
echo"\n";
echo"Question 2) Is it bigger than a breadbox? ";
echo"\n";
$Q2 = readline("> ");
echo"\n";
if ($Q1 === "animal"){
    if ($Q2 == "yes"){
        $answer = "moose";
    } else {
        $answer = "squirrel";
    }
} else if ($Q1 === "vegetable"){
    if ($Q2 == "yes"){
        $answer = "watermelon";
    } else {
        $answer = "carrot";
    }
} else if ($Q1 === "mineral"){
    if ($Q2 == "yes"){
        $answer = "camaro";
    } else {
        $answer = "paper clip";
    }
}
echo "My guess is that you are thinking of a $answer. I would ask you if I'm right. but I don't actually care.";
?>