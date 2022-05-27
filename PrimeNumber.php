<?php

/**
 * Program to check given number is prime or not
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
}
//creating object of class
$primeNum = new PrimeNumber();
$num = readline("Enter Number : ");
$primeNum->prime($num);
?>