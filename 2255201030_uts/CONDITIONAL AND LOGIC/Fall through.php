<?php
namespace Codecademy;
//Selvi Widya Rahmi
function returnSeason($month){
switch ($month){
  case "December";
  case "January";
  case "February";
    return "winter";
  case "March";
  case "April";
  case "May";
    return "spring";
  case "June";
  case "July";
  case "August";
    return "summer";
  case "September";
  case "October";
  case "November";
    return "fall";
  }
}
//2255201030
echo returnSeason("February");
echo "\n\n";  
echo returnSeason("April");
echo "\n\n";
echo returnSeason("August");
echo "\n\n";
echo returnSeason("October"); 
//Kelas B
?>