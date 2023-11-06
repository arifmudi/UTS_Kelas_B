<?php
//Selvi Widya Rahmi
//2255201030
namespace Codecademy;
function markAnswer($is_correct)
{
  if ($is_correct){
    return "green";
  }else {
    return "red";
  }
}
//Kelas B
echo markAnswer(FALSE);
echo "\n\n";
echo markAnswer(TRUE);
echo "\n\n";
?>