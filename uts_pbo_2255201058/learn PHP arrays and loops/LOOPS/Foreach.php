<?php
//SRI WIJI ASTUTI

$scores = [
  "Alice" => 99,
  "Bob" => 95,
  "Charlie" => 98,
  "Destiny" => 91,
  "Edward" => 88
];
//2255201058
foreach ($scores as $score) {
  echo "Someone received a score of $score.\n";
}

foreach ($scores as $name => $score) {
  echo "$name received a score of $score.\n";
}
//Kelas B