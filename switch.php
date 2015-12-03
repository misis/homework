<?php 

    $pass = 98;
    
    switch($pass){
        case ($pass > 61 && $pass <= 70):
            echo "Your grade is D";
            break;
        case ($pass > 71 && $pass <= 80):
            echo "Your grade is C";
            break;
        case ($pass > 81 && $pass <= 90):
            echo "Your grade is B";
            break;
        case ($pass > 91 && $pass <= 100):
            echo "Your grade is A";
            break;
        default:
            echo "You don't passed. Your mark is under 60.";
            break;
    }

?>