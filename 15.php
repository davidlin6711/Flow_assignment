<?php
echo "TWO MORE QUESTIONS, BABY!\n";
echo"\n";
echo "Think of something and I'll try to guess it!\n";
echo"\n";
$Q1 = readline("Question 1) Does it stay inside or outside or both? outside? ");
$Q2 = readline("Question 2) Is it a living thing? ");
echo"\n";
if ($Q1 === "inside" && $Q2 === "alive"){
    echo "Then what else could you be thinking of besides a houseplant!?";
}
if ($Q1 === "inside" && $Q2 === "not alive"){
    echo "Then what else could you be thinking of besides a house curtain!?";
}
if ($Q1 === "both" && $Q2 === "alive"){
    echo "Then what else could you be thinking of besides a dog!?";
}
if ($Q1 === "both" && $Q2 === "not alive"){
    echo "Then what else could you be thinking of besides a cell phone!?";
}
if ($Q1 === "outside" && $Q2 === "alive"){
    echo "Then what else could you be thinking of besides a bison!?";
}
if ($Q1 === "outside" && $Q2 === "not alive"){
    echo "Then what else could you be thinking of besides a billboard!?";
}
?>