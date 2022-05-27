<?php
$day_no = (int)readline("Enter the day number ");
echo"\n";
if ($day_no === 0 or $day_no === 7) {
    echo  "Today is Saturday!";
} else if ($day_no === 1){
    echo  "Today is Sunday!";
} else if ($day_no === 2){
    echo  "Today is Monday!";
} else if ($day_no === 3){
    echo  "Today is Tuesday!";
} else if ($day_no === 4){
    echo  "Today is Wednesday!";
} else if ($day_no === 5){
    echo  "Today is Thursday!";
} else if ($day_no === 6){
    echo  "Today is Friday!";
} else {
    echo "ERROR";
}
?>