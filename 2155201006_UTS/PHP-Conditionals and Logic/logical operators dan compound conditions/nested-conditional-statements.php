<?php
//DEVI SELVI YANTI
namespace Codecademy;

function both($first, $second)
{
    if ($first){
        if ($second){
            return "both";
        } else {
            return "not both";
        }
    } else {
        return "not both";
    }
}
//NIM: 2155201006
echo both(TRUE, TRUE);
echo "\n\n";
echo both(FALSE, FALSE);
echo "\n\n";
echo both(TRUE, FALSE);
//KELAS B
