<? xml version = "1.0" encoding = "utf-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- week8.php
     A trivial document
     -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head> <title> Books and images </title>

<style>
span
{
color:red;
font-weight:bold;
}
</style>
</head>
<body>

<?php

echo '<p> Tell you a secret. My birthday is <span> August 4th 1995 </span></p>';

date_default_timezone_set('UTC');
echo "Today is:";
echo date("d/m/Y");



$timeFirst  = strtotime('1995-08-04');
$timeSecond = time();

$diffInSecs = $timeSecond - $timeFirst;
$diffInMins = $diffInSecs/60;
$diffInHrs = $diffInMins/60;
$diffInDays = $diffInHrs/24;
$diffInWeeks = $diffInDays/7;
$diffInYrs = $diffInWeeks/52;

echo "<br> Since my birthday," . $diffInSecs.
"  seconds, or ". intval($diffInMins). 
"  minutes, or ". intval($diffInHrs).
"  hours, or ". intval($differenceInDays) .
"  days, or ". intval($diffInDays). 
"  weeks, or " . intval($diffInYrs). "  years have passed."  ;

?>


</body>
</html>

