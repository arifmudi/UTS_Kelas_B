<?php
namespace Codecademy;
//Selvi Widya Rahmi
function both($first, $second)
{
  if ($first){
    if ($second){
      return "both";
    }else{
      return "not both";
    }
  } else {
    return "not both";
  }
}
//2255201030
echo both(True, True);
echo "\n";
echo both(False, False);
//Kelas B
?>