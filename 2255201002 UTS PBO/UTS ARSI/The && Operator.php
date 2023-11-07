<?php
//arsi dewi saputri
//2255201002
//semester_3
namespace Codecademy;
function clapYourHands($is_happy, $knows_it){
  if ($is_happy && $knows_it){
    return "CLAP!";
  } else {
    return ":(";
  }
}

echo clapYourHands(TRUE, TRUE);
echo "\n\n";
echo clapYourHands(TRUE, FALSE); 
//Kelas B

