<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">                      
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
// declared array variable store employee's name and salary
$empSalary = array("Mohammed" =>"35000","Yahya"=>"19000","Hanaif"=>"103000");

/// this is unsort list
echo "unsort</br>";
foreach ($empSalary as $name => $sal) {
    echo "$name = $sal</br>";
}
echo "</br></br>";

// this is A sort method
$asort = my_asort($empSalary);
echo "A SORT ()</br>";
foreach ($asort as $name => $sal) {
    echo "$name = $sal</br>";
}
echo "</br></br>";

// this is K sort method
$ksort = my_ksort($empSalary);
echo "K SORT ()</br>";
foreach ($ksort as $name => $sal) {
    echo "$name = $sal</br>";
}
echo "</br></br>";

//MY A SORT
function my_asort($array_1)
{
	$size = sizeof($array_1); // size of array is stored in variable called size
	$nameArray = array(); //initialised array called nameArrray
	$salArray = array(); //initialised array called salArrray

	//Insert into new arrays
	for($i=0; $i< $size; $i++){
		$currentKey = key($array_1); //each key is stored in variable called currentKey
		
		$nameArray[$i] = $currentKey; //each currentKey is stored in variable called nameArray
		$salArray[$i] = $array_1[$currentKey]; //each index and key is stored in variable called salArray
		
		next($array_1); //the same process is carried out with the next array index
	}
	//Sort
	$temp = ""; //temp variable is initialised to 0
	for($pass = 1; $pass<$size; $pass++){
		for($i=0; $i< $size-$pass; $i++){
			$j = $i + 1;
			if($salArray[$i]>$salArray[$j]){
				$temp = $salArray[$i];
				$salArray[$i] = $salArray[$j];
				$salArray[$j] = $temp;
				
				$temp = $nameArray[$i];
				$nameArray[$i] = $nameArray[$j];
				$nameArray[$j] = $temp;
			}
		}
	}
	//Insert into final array
	$finalArray = array(); //initialises an array called finalArray
	for($i=0; $i< $size; $i++){
		$finalArray[$nameArray[$i]] = $salArray[$i]; //names stored in Array is used as the key of the finalArray and the salArray is used as the values of the keys in the finalArray
	}
	//Returns content of the finalArray of the sorted array interms of salary 
	return $finalArray;			
}
//MY K SORT
function my_ksort($array_1)
{
	$size = sizeof($array_1); // retreives size of array and stores in $size variable
	$nameArray = array(); //initialises array called $nameArray
	$salArray = array(); //initialises array called $salArray
	//Insert into new arrays
	for($i=0; $i< $size; $i++){
		$currentKey = key($array_1); //stores index in currentKey variable
		
		$nameArray[$i] = $currentKey; //assigns the nameArray with its counter value
		$salArray[$i] = $array_1[$currentKey]; //salArray is used as the key of the array index
		
		next($array_1);
	}
	//Sort
	$temp = "";
	for($pass = 1; $pass<$size; $pass++){
		for($i=0; $i< $size-$pass; $i++){
			$j = $i + 1;
			if($nameArray[$i]>$nameArray[$j]){
				$temp = $nameArray[$i];
				$nameArray[$i] = $nameArray[$j];
				$nameArray[$j] = $temp;
				
				$temp = $salArray[$i];
				$salArray[$i] = $salArray[$j];
				$salArray[$j] = $temp;
			}
		}
	}
	//Insert into final array
	$finalArray = array();
	for($i=0; $i< $size; $i++){
		$finalArray[$nameArray[$i]] = $salArray[$i];
	}
	//Return
	return $finalArray;
}
?>
</body>
</html>
