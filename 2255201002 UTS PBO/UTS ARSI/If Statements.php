<?php
//arsi_dewi_saputri
//2255201002
//semester_3
namespace Codecademy;

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
