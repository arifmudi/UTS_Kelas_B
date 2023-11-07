<?php
//Alman Azizi
namespace Codecademy;

function clapYourHands($is_happy, $knows_it){
    if ($is_happy && $knows_it){
        return "CLAP!";
    } else {
        return ":(";
    }
}
//2255201001
echo clapYourHands(TRUE, TRUE);
echo "\n\n";
echo clapYourHands(TRUE, FALSE);
//Kelas B
