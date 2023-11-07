<?php
//arsi dewi saputri
//2255201002
//semester_3
namespace Codecademy;
function duckDuckGoose($is_goose){
  if (!$is_goose){
    return "duck";
  } else {
    return "goose!";
  }
}


echo duckDuckGoose(FALSE);
echo "\n";
echo duckDuckGoose(FALSE);
echo "\n";
echo duckDuckGoose(TRUE);
