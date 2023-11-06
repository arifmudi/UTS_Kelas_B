<?php
namespace Codecademy;
// Sarwo Dinata
function clapYourHands($is_happy, $knows_it){
  if ($is_happy && $knows_it){
    return "GINA";
  } else {
    return "I LOVE YOU :)";
  }
}
// 2255201007
echo clapYourHands(TRUE, TRUE);
echo "\n\n";
echo clapYourHands(TRUE, FALSE); 
// Kelas B