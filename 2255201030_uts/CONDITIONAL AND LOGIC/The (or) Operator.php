<?php
namespace Codecademy;
//Selvi Widya Rahmi
function willWeEat($meal_type, $arehungry)
{
  if ($meal_type === "dessert" || $arehungry){
    return "Yum. Thanks!";
  } else {
    return "No thanks. We're not hungry.";
  }
}
//2255201030
echo willWeEat("dessert", false);
echo "\n\n";
echo willWeEat("dinner", false);
//Kelas B
?>