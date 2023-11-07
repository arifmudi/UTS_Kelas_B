<?php
//hayuda_putra_pratama
//2255201041
//semester_3 
namespace Codecademy;

$is_admin = FALSE;
$is_user = TRUE;
if ($is_admin or $is_user){
  echo "You can change the password.\n";
}
$correct_pin = TRUE;
$sufficient_funds = TRUE;
if ($correct_pin and $sufficient_funds){
  echo "You can make the withdrawal.";
}