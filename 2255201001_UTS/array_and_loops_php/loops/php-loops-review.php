<?php
//Alman Azizi
# while
$count = 5;
echo "Countdown!\n";
while ($count > -1) {
  echo $count . "\n";
  $count--;
}
echo "Blastoff!\n\n";

# do...while
$lights = "off";
do {
  echo "The lights are " . $lights . "\n";
  if ($lights === "off") {
    $lights = "on";
  } else {
    $lights = "off";
  }
} while ($lights === "on");
echo "\n";

# for
$names = ["Ann", "Bob", "Cassidy", "Dave", "Ed"];
for ($index = 0; $index < count($names); $index+=2){
  echo $names[$index] . "\n";
}
echo "\n";

# foreach
$properties = [
  "temperature" => "cold",
  "weather" => "rainy",
  "sky" => "gray"
              ];
//2255201001
foreach ($properties as $key=>$value) {
  echo "The $key is $value.\n";
}
echo "\n";

# break and continue
# this skips printing Ann and will
# stop execution after printing
# Dave
$names = ["Ann", "Bob", "Cassidy", "Dave", "Ed"];
for ($index = 0; $index < count($names); $index+=1){
  if ($names[$index] == "Ann") {
    continue;
  }
  echo $names[$index] . "\n";
  if ($names[$index] == "Dave") {
    break;
  }
}
//Kelas B