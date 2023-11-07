<?php
//hayuda_putra_pratama
//2255201041
//semester_3
  for ($i = 10; $i >= 0; $i--) {
    if ($i === 2) {
      echo "Ready!\n";
    } elseif ($i === 1) {
      echo "Set!\n";
    } elseif ($i === 0) {
      echo "Go!\n";
    } else {
      echo $i . "\n";
    }
  }