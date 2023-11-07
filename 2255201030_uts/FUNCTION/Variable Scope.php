<?php
// selvi widya rahmi
$language = "PHP";
$topic = "scope";
// 2255201030
function generateLessonName($concept)
{
  global $language;
  return $language . ": " . $concept;
}
// kelas B
echo generateLessonName($topic);
?>