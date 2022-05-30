<?php
$pin = 12345;
echo "\nWELCOME TO THE BANK OF MITCHELL.\n";
$entered_pin = (int)readline("ENTER YOUR PIN: \n");
while ($entered_pin != $pin) {
    echo "\nINCORRECT PIN. TRY AGAIN.\n";
    $entered_pin = (int)readline("ENTER YOUR PIN: \n");
}
echo "\nPIN ACCEPTED. YOU NOW HAVE ACCESS TO YOUR ACCOUNT.";
?>