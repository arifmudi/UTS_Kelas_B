<?php
namespace Codecademy;
//putra ramadan 
//2255201005
function markAnswer($is_correct)
{
  if ($is_correct) {
    return "green";
  } else {
    return "red";
  }
}

echo markAnswer(FALSE);
echo "\n\n";
echo markAnswer(TRUE);
echo "\n\n";
