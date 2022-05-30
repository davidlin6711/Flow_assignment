<?php
function add_keychains(){
    echo "\nADD KEYCHAINS\n";
}
function remove_keychains(){
    echo "\nREMOVE KEYCHAINS\n";
}
function view_order(){
    echo "\nVIEW ORDER\n";
}
function checkout(){
    echo "\nCHECKOUT\n";
}
echo "Ye Olde Keychain Shoppe.\n\n";
while(1) {
    echo "\n1. Add keychains to order.\n";
    echo "2. Remove keychains from order.\n";
    echo "3. View order.\n";
    echo "4. Checkout.\n";
    $choice = (int)readline("Please enter your choice: ");
    switch ($choice) {
        case 1:
            add_keychains();
            break;
        case 2:
            remove_keychains();
            break;
        case 3:
            view_order();
            break;
        case 4:
            checkout();
            break;
    }
}
?>