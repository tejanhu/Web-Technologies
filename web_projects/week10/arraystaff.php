<?php

$staff_salary = array("Mohammed" =>"35000","Yahya"=>"19000","Hanaif"=>"103000");
echo "Unsorted";
echo "<br>";
foreach($staff_salary as $x=>$x_value)
{
 echo "Key=" . $x . ", Value=" . $x_value;
 echo "<br>";
}

echo "<br>";

asort($staff_salary);

echo "Sorted by value";
echo "<br>";

foreach($staff_salary as $x=>$x_value)
{
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

 echo "<br>";

 ksort($staff_salary);
 echo "Sorted by index";
 echo "<br>";
 foreach($staff_salary as $x=>$x_value)
 {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";

 }





?>
