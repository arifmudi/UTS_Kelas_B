<?php
//Alman Azizi
namespace Codecademy;

function willWeEat($meal_type, $is_hungry)
{
    if ($meal_type === "dessert" || $is_hungry) {
        return "Yum. Thanks!";
    } else {
        return "No thanks. We're not hungry.";
    }
}
//2255201001

echo willWeEat("dessert", false);
echo "\n\n";
echo willWeEat("dinner", false);
//Kelas B