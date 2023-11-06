<?php
namespace Codecademy;
//Selvi Widya Rahmi
function whatRelation ($percentSharedDNA)
{
 if ($percentSharedDNA === 100){
   echo "identical twins";
 } elseif ($percentSharedDNA > 35){
   echo "parent and child or full siblings";
 } elseif ($percentSharedDNA > 14){
   echo "grandparent and grandchild, aunt/uncle and niece/nephew, or half siblings";
 }  elseif ($percentSharedDNA > 6) {
   echo "first cousins";
 } elseif ($percentSharedDNA > 2){
   echo "second cousins";
 } elseif ($percentSharedDNA > 0){
   echo "third cousins";
 } else {
   echo "not genetically related";
 }
}
//2255201030
whatRelation(100);
echo "\n\n";
whatRelation(60);
echo "\n\n";
whatRelation(35);
echo "\n\n";
whatRelation(12);
echo "\n\n";
whatRelation(3);
echo "\n\n";
whatRelation(1);
//Kelas B
?>