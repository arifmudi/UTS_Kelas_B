<?php
  $plant_height = 22;
do {
    $plant_height++;
    if ($plant_height === 30) {
        echo "The plant is mature and producing fruit!\n";
        break;
    }
} while ($plant_height <= 30);

$plant_height = 22;
do {
    echo "The plant is $plant_height tall.\n";
    $plant_height++;
    if ($plant_height === 30) {
        echo "The plant is mature and producing fruit!\n";
        break;
    }
} while ($plant_height <= 30);

$plant_height = 22;
do {
    echo "The plant is $plant_height tall.\n";
    if ($plant_height >= 30) {
        echo "And can produce fruit.\n";
        break;
    }
    $plant_height++;
} while ($plant_height <= 30);

$plant_height = 35;
do {
    echo "The plant is $plant_height tall.\n";
    if ($plant_height >= 30) {
        echo "The plant is mature.";
        echo " And can produce fruit.\n";
        break;
    }
    $plant_height++;

} while ($plant_height <= 30);
?>