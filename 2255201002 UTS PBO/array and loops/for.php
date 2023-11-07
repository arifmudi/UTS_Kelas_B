<?php
//arsi_dewi_saputri
//2255201002
//semester_3
$plant_height = 22;
  do  {
    echo "The plant is $plant_height tall.\n";
    if ($plant_height >= 30) {
      echo "And can produce fruit.\n";
    }
    $plant_height ++;
  } while ($plant_height < 31);