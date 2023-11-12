<?php
//SRI WIJI ASTUTI

namespace Codecademy;

function markAnswer($is_correct)
{
  if ($is_correct) {
    return "green";
  } else {
    return "red";
  }
}
//2255201058

echo markAnswer(FALSE);
echo "\n\n";
echo markAnswer(TRUE);
echo "\n\n";
//Kelas B