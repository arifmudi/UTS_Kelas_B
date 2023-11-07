<?php
//SEKAR MELATI
namespace Codecademy;

function clapYourHands($is_happy, $knows_it){
    if ($is_happy && $knows_it){
        return "CLAP!";
    } else {
        return ":(";
    }
}
//Nim 2155201030
echo clapYourHands(TRUE, TRUE);
echo "\n\n";
echo clapYourHands(TRUE, FALSE);
//KELAS B
