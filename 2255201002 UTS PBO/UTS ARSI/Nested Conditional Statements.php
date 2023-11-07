<?php
//arsi dewi saputri
//2255201002
//semester_3
namespace Codecademy;
function both($first, $second)
{
  if ($first){
    if ($second){
      return "both";
    } else {
      return "not both";
    }
  } else {
    return "not both";
  }
}


echo both(TRUE, TRUE);
echo "\n\n";
echo both(FALSE, FALSE);
echo "\n\n";
echo both(TRUE, FALSE);

