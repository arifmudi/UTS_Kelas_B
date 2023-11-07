<?php
namespace Codecademy;
//desri insani
//2255201016

function duckDuckGoose($is_goose){
  if (!$is_goose){
    return "duck";
  } else {
    return "goose!";
  }
}
//2255201010

echo duckDuckGoose(FALSE);
echo "\n";
echo duckDuckGoose(FALSE);
echo "\n";
echo duckDuckGoose(TRUE);
//Kelas B