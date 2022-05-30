<?php
function add_keychains($keychain_stock){
    $no = (int)readline("You have $keychain_stock keychains. How many to add? ");
    $keychain_stock += $no;
    echo "You now have $keychain_stock keychains.\n";
    return $keychain_stock;
}
function remove_keychains($keychain_stock){
    $no = (int)readline("You have $keychain_stock keychains. How many to remove? ");
    $keychain_stock -= $no;
    echo "You now have $keychain_stock keychains.\n";
    return $keychain_stock;
}
function view_order($keychain_stock){
    echo "You have $keychain_stock keychains.\n";
    echo "Keychain costs $10 each.\n";
    printf("Total cost is $%d.\n",$keychain_stock*10);
}
function checkout($keychain_stock){
    $name = readline("What is your name? ");
    echo "You have $keychain_stock keychains.\n";
    echo "Keychain costs $10 each.\n";
    printf("Total cost is $%d.",$keychain_stock*10);
    echo "Thanks for your order! $name.\n";
}
echo "Ye Olde Keychain Shoppe.\n\n";
$keychain_stock = 0;
while(1) {
    echo "\n1. Add keychains to order.\n";
    echo "2. Remove keychains from order.\n";
    echo "3. View order.\n";
    echo "4. Checkout.\n\n";
    $choice = (int)readline("Please enter your choice: ");
    switch ($choice) {
        case 1:
            $keychain_stock = add_keychains($keychain_stock);
            break;
        case 2:
            $keychain_stock = remove_keychains($keychain_stock);
            break;
        case 3:
            view_order($keychain_stock);
            break;
        case 4:
            checkout($keychain_stock);
            break;
    }
}
?>