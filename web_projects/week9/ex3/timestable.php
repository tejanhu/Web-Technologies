<?php

$start = 1; 
$finish = 15;

echo '<table border = "1">'; //table

echo '<tr><th>x</th>'; //print 1st table header in table row which is x
for ($x =$start; $x <= $finish; $x++) { //for loop increments the value of x starting from 1 up to 15
echo '<th>' .$x. '</th>';} //print incremented values of variable $x which is located in the 2nd table header

echo "</tr>\n"; //print the table row of the next line

for ($y = $start; $y <= $finish; $y++){  //for loop increments the value of y starting from 1 up to 15

	echo '<tr><th>' .$y.'</th>'; //print incremented values of variable $y which is located in the 2nd table header
for ($z =$start; $z <=$finish; $z++) {  //for loop increments the value of z starting from 1 up to 15

	echo '<td>'.($y * $z).'</td>'; //print the values of the variable $y multiplied by the variable $z in a table data structure
}

echo "</tr>\n"; //print the table row of the next line
}
 
echo '</table>'; //print the whole table, outputting it to the screen

?>