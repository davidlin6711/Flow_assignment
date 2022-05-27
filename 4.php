<?php
echo"\n";
echo "Please enter the following information so that I can sell it for a profit!\n\n";
echo"\n";
$f_name = readline("First Name:\n");
$l_name = readline("Last Name:\n");
$grade = (int)readline("Grade (9-12):\n");
$student_id = (int)readline("Student ID:\n");
$login = readline("Login:\n");
$GPA = (float)readline("GPA (0.0-4.0):\n");
echo"\n";
echo "Your information:\n";
echo "\tLogin: $login\n";
echo "\tID:    $student_id\n";
echo "\tName:  $l_name, "."$f_name\n";
echo "\tGPA:   $GPA\n";
echo "\tGrade: $grade\n";
?>