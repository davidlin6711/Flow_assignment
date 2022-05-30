<?php
$pin = 12345;
$tries = 0;
echo "\nWELCOME TO THE BANK OF MITCHELL.\n";
$entered_pin = (int)readline("ENTER YOUR PIN: \n");
$tries++;
while ($entered_pin != $pin and $tries < 3) {
    echo "\nINCORRECT PIN. TRY AGAIN.\n";
    $entered_pin = (int)readline("ENTER YOUR PIN: \n");
    $tries++;
}
if ($entered_pin === $pin){
    echo "\nPIN ACCEPTED. YOU NOW HAVE ACCESS TO YOUR ACCOUNT.";
} else if ($tries >= 3){
    echo "\nYOU HAVE RUN OUT OF TRIES. ACCOUNT LOCKED.";
}
?>