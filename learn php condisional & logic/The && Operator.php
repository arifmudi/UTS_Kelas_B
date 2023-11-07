<?php
//SRI UTAMI

namespace Codecademy; 

function clapYourHands($is_happy, $knows_it){
  if ($is_happy && $knows_it){
    return "CLAP!";
  } else {
    return ":(";
  }
}
//2255201032

echo clapYourHands(TRUE, TRUE);
echo "\n\n";
echo clapYourHands(TRUE, FALSE); 
//Kelas B