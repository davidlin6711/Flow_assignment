<?php
echo "I will add up the numbers you give me.\n";
$sum =0 ;
do{
    $number = (int)readline("Number: ");
    if ($number === 0){
        break;
    }
    else{
        $sum += $number;
        echo "The total so far is: $sum\n";
    }
}while($number != 0);
echo "\nThe total is $sum\n";
?>