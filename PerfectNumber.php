<?php

/**
 * Author -> Bhumesh Ranjane
 * PHP Version -> 8.0.9
 * Class to perform Perfect Number operations
 */
class Perfect_Number
{
	/**
	 * Function to check the Number is Perfect Number
	 * Passing the Number as a Parameter
	 * Printing weather the number is perfect number or not
	 */
	function perfectNumber($number)
	{
		$sum = 0;
		for ($i = 1; $i < $number; $i++) {
			if (($number % $i) == 0) {
				$sum = $sum + $i;
			}
		}
		if ($sum == $number) {
			echo "The Number " . $number . " is a Perfect Number.";
		} else {
			echo "The Number " . $number . " is not a Perfect Number.";
		}
	}
	function validation($number){
		if(is_numeric($number)){
			Perfect_Number::perfectNumber($number);
		}
		else{
			echo "Enter valid input";
		}
	}
	
}
$perfectNumber = new Perfect_Number();
$number = readline('Enter a Number: ');
//$perfectNumber->perfectNumber($number);
$perfectNumber-> validation($number);
?>