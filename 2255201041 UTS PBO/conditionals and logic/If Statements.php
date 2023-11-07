<?php
//hayuda_putra_pratama
//225520041
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