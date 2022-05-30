<?php
echo "I am thinking of a number between 1-100. You have 7 guesses.\n";
$guess_number = 50;
for ($i = 0; $i < 7; $i++) {
    if ($i === 0){
        $number = (int)readline("First guess: ");
        $guess = 1;
    }
    else {
        $guess += 1;
        $number = (int)readline("Guess #$guess: ");
    }
    if ($number < $guess_number) {
        if ($i < 6) {
            echo "Sorry, that guess is too low. \n";
        }
    } else if ($number > $guess_number) {
        if ($i < 6) {
            echo "Sorry, that guess is too high. \n";
        }
    } else {
        echo "You guessed it! What are the odds?!";
        break;
    }
}
if ($i === 7){
    echo "Sorry you didn't guess it in 7 tries. You lose!. ";
}
?>