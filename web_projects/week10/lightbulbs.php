
<?php
// Get form data values
$User = $_POST["User_name"];
$bulbs1 = $_POST["bulbs1"];
$bulbs2 = $_POST["bulbs2"];
$bulbs3 = $_POST["bulbs3"];
$bulbs4 = $_POST["bulbs4"];
$somebattery=$_POST["NBP"];
$somebatterytotal=$somebattery*10.86;
$payment = $_POST["card"];

// If any of the quantities are blank, set them to zero
if ($bulbs1 == "") $bulbs1 = 0;
if ($bulbs2 == "") $bulbs2 = 0;
if ($bulbs3 == "") $bulbs3 = 0;
if ($bulbs4 == "") $bulbs4 = 0;
if (isset($bulbs1)) {
    $bulbs1=1;
}

if (isset($bulbs2)) {
    $bulbs2=1;
}

if (isset($bulbs3)) {
    $bulbs3=1;
}

if (isset($bulbs4)) {
    $bulbs4=1;
}











// Compute the item costs and total cost
$bulb1_cost = 2.39 * $bulbs1;
$bulb2_cost = 4.29 * $bulbs2;
$bulb3_cost = 3.95 * $bulbs3;
$bulb4_cost = 7.49 * $bulbs4;
$total_price = ($bulb1_cost + $bulb2_cost +$bulb3_cost +$bulb4_cost+$somebatterytotal)*1.175;
$total_items = $bulbs1 + $bulbs2 +$bulbs3 + $bulbs4;

// Return the results to the browser in a table
?>

<h4> Customer: </h4>
<?php
print ("$User <br /> ");
?>
<p /> <p />
<table border = "border">
<caption> Order Information </caption>
<tr>
<th> Product </th>
<th> Unit Price </th>
<th> Quantity Ordered </th>
<th> Item Cost </th>
</tr>

<tr align = "center">
<td> Four 100-watt light bulbs for $2.39 </td>
<td> $2.39 </td>
<td> <?php print ("$bulbs1"); ?> </td>
<td> <?php printf ($bulb1_cost);
?>
</td>
</tr>
<tr align = "center">
<td> Eight 100-watt light bulbs for $4.29 </td>
<td> $4.29 </td>
<td> <?php print ("$bulbs2"); ?> </td>
<td> <?php printf ($bulb2_cost); ?>
</td>
</tr>

<tr align = "center">
<td> Four 100-watt long-life light bulbs for $3.95 </td>
<td> $3.95 </td>
<td> <?php print ("$bulbs3"); ?> </td>
<td> <?php printf ($bulb3_cost); ?>
</td>
</tr>
<tr align = "center">
<td> Eight 100-watt long-life light bulbs for $7.49 </td>
<td> $7.49 </td>
<td> <?php print ("$bulbs4"); ?> </td>
<td> <?php printf ($bulb4_cost); ?>
</td></tr>
</table>
<p /> <p />
<?php
print ("You ordered $total_items bulbs items <br />");
print("Your total bill is: ".$total_price);
print("<br /><br />");
print ("Your chosen method of payment is: $payment <br />");
?>


