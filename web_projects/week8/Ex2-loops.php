<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- whileloop.php
     A trivial document
     -->
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<title>Forloop sum</title>
</head>
<body>
 <?php
$x=1;
$sum=0;
while($x != 101)
  {

  $sum=$sum+$x;
  $x++;
  }
echo "Calculating the sum of the integers from 1 to 100  ", $sum;
?> 

 <?php

$sum=0;
for($i=0;$i<=100;$i++){
$sum=$sum+$i;
}
echo "Calculating the sum of the integers from 1 to 100  ", $sum;
?>

 <?php

 $x=1;
 $sum=0; 
 do{
    $sum=$sum+$x;
    $x++;
    }
while ($x <= 100);
echo "Calculating the sum of the integers from 1 to 100  ", $sum;
?>
 
</body>
</html>
