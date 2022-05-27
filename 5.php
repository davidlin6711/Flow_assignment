<?php
$name = readline("Hello. What is your name? \n");
echo"\n";
$age = (int)readline("Hi. ".$name."! How old are you? ");
echo"\n";
printf("Did you know that in five years you will be %d years old?\nAnd five years ago you were %d! Imagine that!",$age+5,$age-5);
?>