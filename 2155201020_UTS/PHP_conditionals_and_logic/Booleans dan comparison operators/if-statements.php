<?php
//NAMA: Nabilla rahmi
function markAnswer($is_correct)
{
  if ($is_correct) {
    return "green";
  } else {
    return "red";
  }
}
//NIM: 2155201006
echo markAnswer(FALSE);
echo "\n\n";
echo markAnswer(TRUE);
echo "\n\n";
//Kelas:B