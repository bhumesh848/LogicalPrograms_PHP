<?php
/**
 * Author -> Bhumesh Ranjane
 * PHP Version -> 8.0.9
 * Class to get the Fibonacci Series
 */
class FibonacciSeries
{
    /**
     * function fibonacci calculates the fibonaccci series upto nth value
     * parameters - nth value, firstnumber, second number of series.
     */
    function fibonacci($nthValue)
    {
        $firstNum=0;
        $secondNum=1;
        echo $firstNum . " ";
        echo $secondNum . " ";
        for ($i = 0; $i <= $nthValue - 2; $i++) {
            
            echo $firstNum + $secondNum . " ";
            $temp = $firstNum;
            $firstNum = $secondNum;
            $secondNum = $temp + $secondNum;
        }
    }
}

// Taking input from the user
$nthValue = readline("How many numbers of series you want: ");
/**
 * Using if-else statement to check whether the input entered
 * by user is valid or not
 */
if (is_numeric($nthValue)){        
    $myseries = new FibonacciSeries();  //creating Object
    $myseries->fibonacci($nthValue); //using function
}
else {
    echo "PLEASE ENTER VALID INPUT"; //Invalid message 
}
?>