<?php
//SRI WIJI ASTUTI

namespace Codecademy; 

function clapYourHands($is_happy, $knows_it){
  if ($is_happy && $knows_it){
    return "CLAP!";
  } else {
    return ":(";
  }
}
//2255201058

echo clapYourHands(TRUE, TRUE);
echo "\n\n";
echo clapYourHands(TRUE, FALSE); 
//Kelas B