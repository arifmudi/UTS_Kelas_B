<?php
//SRI WIJI ASTUTI

namespace Codecademy;

function duckDuckGoose($is_goose){
  if (!$is_goose){
    return "duck";
  } else {
    return "goose!";
  }
}
//2255201058

echo duckDuckGoose(FALSE);
echo "\n";
echo duckDuckGoose(FALSE);
echo "\n";
echo duckDuckGoose(TRUE);
//Kelas B