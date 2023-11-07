<?php
for ($i = 10; $i >= 0; $i--) {
    echo $i . "\n";
}
echo "Ready!\n";
echo "Set!\n";
echo "Go!\n";

for ($i = 10; $i >= 0; $i--) {
    if ($i >= 3 && $i <= 10) {
        echo $i . "\n";
    } elseif ($i == 2) {
        echo "Ready!\n";
    } elseif ($i == 1) {
        echo "Set!\n";
    } else {
        echo "Go!\n";
    }
}
?>