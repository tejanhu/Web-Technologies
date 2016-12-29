<? xml version = "1.0" encoding = "utf-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- week9.php
     A trivial document
     -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head> <title> Books and images </title>
<body>
<?php
function calculate_median($arr) {
sort($arr);
$count = count($arr); 
$middleval = floor(($count-1)/2);

if($count % 2) { 
$median = $arr[$middleval];

} 

else { 
$low = $arr[$middleval];
$high = $arr[$middleval+1];
$median = (($low+$high)/2);
}

return $median;
}

function calculate_average($arr) {
$count = count($arr);
foreach ($arr as $value) {
$total = $total + $value; 
}

$average = ($total/$count);
return $average;
}


$parameter_array = array("1000", "1200", "1500", "1570", "1800", "1980", "2200", "1450");

$median_parameter = calculate_median($parameter_array);
echo '<p>Median home value:'.number_format($median_parameter).'<br/>';

$average_parameter = calculate_average($parameter_array);
echo 'Average home value:'.number_format($average_parameter).'</p>';



?>

</body>
</html>
