<?php
echo "WELCOME TO MITCHELL'S TINY ADVENTURE!\n";
echo "You are in a creepy house! Would you like to go \"upstairs\" or into the \"kitchen\"?\n";
$f_opinion = readline("> ");
if ($f_opinion === "kitchen") {
    echo "There is a long countertop with dirty dishes everywhere. \nOff to one side there is, as you'd expect, a refrigerator. \nYou may open the \"refrigerator\" or look in a \"cabinet\".\n";
    $s_opinion = readline("> ");
    if ($s_opinion === "refrigerator") {
        echo "Inside the refrigerator you see food and stuff. It looks pretty nasty. \nWould you like to eat some of the food? (\"yes\" or \"no\")\n";
        $t_opinion = readline("> ");
        if ($t_opinion === "yes") {
            echo "You eat the food and develop a stomach ache.\n";
        } else {
            echo "You die of starvation... eventually.\n";
        }
    } else {
        echo "You died. You triggered a bomb inside the cabinet.\n";
    }
}
else {
    echo "Upstairs you see a hallway. At the end of the hallway is the master \"bedroom\". \nThere is also a \"bathroom\" off the hallway. Where would you like to go?\n";
    $s_opinion = readline("> ");
    if ($s_opinion === "bedroom") {
        echo "You are in a plush bedroom, with expensive-looking hardwood furniture. \nThe bed is unmade. In the back of the room, the closet door is ajar. \nWould you like to open the door? (\"yes\" or \"no\")\n";
        $t_opinion = readline("> ");
        if ($t_opinion === "yes") {
            echo "You open the door and see a pot of gold! You instantly become a millionaire! \n";
        } else {
            echo "Well, then I guess you'll never know what was in there. Thanks for playing\n";
        }
    }
    else {
        echo "You are inside the bathroom and you see a shower curtain covering a bathtub.\nDo you want to uncover the shower curtain and check? (\"yes\" or \"no\")\n";
        $t_opinion = readline("> ");
        if ($t_opinion === "yes") {
            echo "You uncover the shower curtain and take a shower. You win!\n";
        } else {
            echo "You try to head back but it's too late! \nThere was someone inside the bathtub that snuck up on you and shot you with a gun. \nSorry, you lose.";
        }
    }
}

?>