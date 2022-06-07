<?php

/**
 * Author -> Bhumesh Ranjane
 * PHP Version -> 8.0.9
 * Class to perform Prime Number operations
 */
class PrimeNumber
{
    function prime($num)
    {
        $temp = 0; //initializing temp = 0
        //checking for 0 or 1 
        if (($num <= 0) || ($num == 1)) {
            echo "not prime";
        } else {
            for ($i = 1; $i <= $num; $i++) {
                if ($num % $i == 0) {
                    $temp = $temp + 1;
                } else {
                    $temp = $temp;
                }
            }
            if ($temp == 2) {
                echo "$num is prime number";
            } else {
                echo "$num is not prime number";
            }
        }
    }
    function validation($number){
		if(is_numeric($number)){
			PrimeNumber::prime($number);
		}
		else{
			echo "Enter valid input";
		}
	}
}
//creating object of class
$primeNum = new PrimeNumber();
$num = readline("Enter Number : ");
//$primeNum->prime($num);
$primeNum->validation($number)
?>