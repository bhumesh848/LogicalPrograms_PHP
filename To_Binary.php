<?php
/**
 * Author -> Bhumesh Ranjane
 * PHP Version -> 8.0.9
 * Class to convert decimal into binary
 */
class To_Binary
{
    /**
     * Function to convert a decimal number to binary number
     * Passing the number as parameter
     * Printing the Binary output
     */
    public static function toBinary($number)
    {
        $sum = 0;
        for ($i = 7; $i >= 0; $i--) {
            if (pow(2, $i) <= $number && ($sum+pow(2,$i))<=$number) {
                $sum += pow(2, $i);
                echo "1 ";
            }
            elseif($sum!=0){
                echo "0 ";
            }
        }
    }
}
$number = readline('Enter a +Ve integer: ');
$number1 = (int) $number;
//echo gettype($number1);
//var_dump(is_int($number));
if (gettype($number1) == 'integer') {
    if ($number1 > 0) {
        To_Binary::toBinary($number1);
    } else {
        echo "The input is negative or zero";
    }
} else {
    echo "The input is not an integer";
}
?>