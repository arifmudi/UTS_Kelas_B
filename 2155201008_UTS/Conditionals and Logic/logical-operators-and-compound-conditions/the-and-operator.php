<?php
//Djoel Jalalianifallah
namespace Codecademy;

function clapYourHands($is_happy, $knows_it){
    if ($is_happy && $knows_it){
        return "CLAP!";
    } else {
        return ":(";
    }
}
//NIM 2155201008
echo clapYourHands(TRUE, TRUE);
echo "\n\n";
echo clapYourHands(TRUE, FALSE);
//KELAS B
