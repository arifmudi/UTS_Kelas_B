[11.38, 7/11/2023] TI. Ayuda: <?php
//SRI WIJI ASTUTI
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
//2255201058
# foreach
$properties = [
  "temperature" => "cold",
  "weather" => "rainy",
  "sky" => "gray"
              ];
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
[11.38, 7/11/2023] TI. Ayuda: break and continue.php
[11.38, 7/11/2023] TI. Ayuda: <?php
//Agus Salim
  for ($i = 10; $i >= 0; $i--) {
    if ($i === 2) {
      echo "Ready!\n";
    } elseif ($i === 1) {
      echo "Set!\n";
      break;
//2255201010
    } elseif ($i === 0) {
      echo "Go!\n";
    } elseif ($i===6) {
      continue;
    } else{
      echo $i . "\n";
    }
  }
  //Kelas B
[11.38, 7/11/2023] TI. Ayuda: do while.php
[11.39, 7/11/2023] TI. Ayuda: <?php
//Agus Salim
  $plant_height = 22;
  do  {
    echo "The plant is $plant_height tall.\n";
    if ($plant_height >= 30) {
//2255201010
      echo "And can produce fruit.\n";
    }
    $plant_height ++;
  } while ($plant_height < 31);
//Kelas B
[11.39, 7/11/2023] TI. Ayuda: for.php
[11.39, 7/11/2023] TI. Ayuda: <?php
//Agus Salim
  for ($i = 10; $i >= 0; $i--) {
    if ($i === 2) {
      echo "Ready!\n";
    } elseif ($i === 1) {
      echo "Set!\n";
//2255201010
    } elseif ($i === 0) {
      echo "Go!\n";
    } else {
      echo $i . "\n";
    }
  }
//Kelas B