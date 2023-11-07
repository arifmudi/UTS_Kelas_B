<?php
//DEVI SELVI YANTI
namespace Codecademy;

echo "Hello, there. What's your first name?\n";

$name = readline(">> ");
//NIM: 2155201006
$name_length = strlen($name);

if ($name_length > 8) {
    echo "Hi, ${name}. That's a long name.";
} elseif ($name_length > 3) {
    echo "Hi, ${name}.";
} else {
    echo "Hi, ${name}. That's a short name.";
}
//KELAS B
