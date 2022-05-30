<?php
function area_of_triangle() {
    $first_side = (float)readline("Enter the length of the first side: ");
    $second_side = (float)readline("Enter the length of the second side: ");
    $third_side = (float)readline("Enter the length of the third side: ");
    $S = ($first_side+$second_side+$third_side)/2;
    $area = sqrt($S*($S-$first_side)*($S-$second_side)*($S-$third_side));
    echo "The area is $area.\n\n";
}
function area_of_square() {
    $length = (float)readline("Enter the length: ");
    $area = $length*$length;
    echo "The area is $area.\n\n";
}
function area_of_rectangle() {
    $length = (float)readline("Enter the length: ");
    $breadth = (float)readline("Enter the breadth: ");
    $area = $length*$breadth;
    echo "The area is $area.\n\n";
}
function area_of_circle() {
    $radius = (float)readline("Enter the radius of the circle: ");
    $area = 3.14*$radius*$radius;
    echo "The area is $area.\n\n";
}
function area_of_trapezium() {
    $first_side = (float)readline("Enter the length of the first parallel side: ");
    $second_side = (float)readline("Enter the length of the second parallel side: ");
    $height = (float)readline("Enter the height: ");
    $area = 1/2*($height*($first_side+$second_side));
    echo "The area is $area.\n\n";
}
echo "Choose the shape.\n\t1.Triangle\n\t2.Square\n\t3.Rectangle\n\t4.Circle\n\t5.Trapezium.\n\n";
$choice = (int)readline("Enter your choice: ");
switch($choice){
    case 1:
        area_of_triangle();
        break;
    case 2:
        area_of_square();
        break;
    case 3:
        area_of_rectangle();
        break;
    case 4:
        area_of_circle();
        break;
    case 5:
        area_of_trapezium();
        break;
    default:
        echo "No such option exist.\n";
}
?>