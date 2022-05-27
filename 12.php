<?php
$response = readline("Are you ready for the quiz? ");
echo "Okay here it comes!";
echo"\n";
echo"\n";
$score = 0;
echo "Q1) What is the capital of Alaska? \n\t1) Melbourne \n\t2) Anchorage \n\t3) Juneau\n";
echo"\n";
$Q1 = (int)readline("> ");
echo"\n";
if ($Q1 === 3){
    echo "That's right! \n";
    $score += 1;
} else {
    echo "Sorry \"Juneau\" is the capital of Alaska.\n";
}
echo"\n";
echo"Q2) Can you store the value \"cat\" in a variable of type int? \n\t1) yes \n\t2) no\n";
echo"\n";
$Q2 = (int)readline("> ");
echo"\n";
if ($Q2 === 2){
    echo "That's right! \n";
    $score += 1;
} else {
    echo "Sorry \"cat\" is a string, ints can only store numbers.\n";
}
echo"\n";
echo"03) What is the result of 9+6/3? \n\t1) 5 \n\t2) 11 \n\t3) 15/3\n";
echo"\n";
$Q3 = (int)readline("> ");
echo"\n";
if ($Q3 === 2){
    echo "That's right! \n";
    $score += 1;
} else {
    echo "Sorry \"11\" is the correct answer.\n";
}
echo"\n";
echo "Overall, you got $score out of 3 correct.\nThanks for playing!"
?>