<?php
namespace Codecademy;
//Selvi Widya Rahmi
function clapYourHands ($is_happy, $Know_it)
{
  if ($is_happy && $Know_it){
  return "CLAP!";
} else {
  return ":(";
 }
}
//2255201030
echo clapYourHands(TRUE, TRUE);
echo "\n\n";
echo clapYourHands(TRUE, FALSE); 
//Kelas B
?>