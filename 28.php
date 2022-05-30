<?php
function add_keychains($keychain_stock){
    $no = (int)readline("You have $keychain_stock keychains. How many to add? ");
    $keychain_stock += $no;
    echo "You now have $keychain_stock keychains.\n";
    return $keychain_stock;
}
function remove_keychains($keychain_stock){
    $no = (int)readline("You have $keychain_stock keychains. How many to remove? ");
    if($keychain_stock-$no < 0){
        echo "Keychain number cannot be negative.\n";
        return $keychain_stock;
    } else {
        $keychain_stock -= $no;
        echo "You now have $keychain_stock keychains.\n";
        return $keychain_stock;
    }
}
function view_order($keychain_stock, $price_per_keychain, $tax, $shipping_cost_per_order, $shipping_cost_per_keychain){
    echo "You have $keychain_stock keychains.\n";
    echo "Keychain costs $10 each.\n";
    $total_shipping_charge =  $shipping_cost_per_order+($shipping_cost_per_keychain*$keychain_stock);
    echo "Your shipping charges is $$total_shipping_charge.\n";
    $subtotal_before_tax = $total_shipping_charge+($keychain_stock*10);
    echo "The subtotal is $$subtotal_before_tax.\n";
    $tax_amt = $subtotal_before_tax*($tax/100);
    echo "Tax on the order is $$tax_amt.\n";
    printf("Total cost is $%.2f.\n",$subtotal_before_tax+$tax_amt);
}
function checkout($keychain_stock, $price_per_keychain, $tax, $shipping_cost_per_order, $shipping_cost_per_keychain){
    $name = readline("What is your name? ");
    echo "You have $keychain_stock keychains.\n";
    echo "Keychain costs $10 each.\n";
    $total_shipping_charge =  $shipping_cost_per_order+($shipping_cost_per_keychain*$keychain_stock);
    echo "Your shipping charges is $$total_shipping_charge.\n";
    $subtotal_before_tax = $total_shipping_charge+($keychain_stock*10);
    echo "The subtotal is $$subtotal_before_tax.\n";
    $tax_amt = $subtotal_before_tax*($tax/100);
    echo "Tax on the order is $$tax_amt.\n";
    printf("Total cost is $%.2f.\n",$subtotal_before_tax+$tax_amt);
    echo "Thanks for your order! $name.\n";
}
echo "Ye Olde Keychain Shoppe.\n\n";
$keychain_stock = 0;
$price_per_keychain = 10;
$tax = 8.25;
$shipping_cost_per_order = 5;
$shipping_cost_per_keychain = 1;
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
            view_order($keychain_stock, $price_per_keychain, $tax, $shipping_cost_per_order, $shipping_cost_per_keychain);
            break;
        case 4:
            checkout($keychain_stock, $price_per_keychain, $tax, $shipping_cost_per_order, $shipping_cost_per_keychain);
            break;
        default:
            echo "No such menu option exist.\n";
    }
}
?>