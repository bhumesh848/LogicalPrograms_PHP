<?php
/**
 * Author -> Bhumesh Ranjane
 * PHP Version -> 8.0.9
 * Class to perform Reverse of a Number operations
 */
class ReverseNumber{

    function reverseNum($num){
        $rev = 0;
        $temp = $num;
		while ($temp > 0) {
			$r = $temp % 10;
			$rev = ($rev * 10) + $r;
			$temp = floor($temp / 10);
		}
        echo "The Reverse of the Number " . $num . " is: " . $rev;

    }
}

//Taking input from the user
$num = readline("Enter number to Reverse it: ");
if (is_numeric($num)) {   
    $temp = round($num);  //storing in temp to check its integer or not.
} else {
    $temp = $num;
}

/**
 * Using is_numeric function  to check whether the user
 * has entered valid input or not.
 */
if (is_numeric($num) && $num > 0 && $num == $temp) {
    $revNum = new ReverseNumber();
    $revNum->reverseNum($num);
} else {
    echo "PLEASE ENTER VALID INPUT";
}
?>