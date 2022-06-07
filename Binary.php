<?php
/**
 * Author -> Bhumesh Ranjane
 * PHP Version -> 8.0.9
 * Class to convert decimal into binary and binary to decimal
 */
class Binary
{
    public static $binaryArray = array();
    /**
     * Function to convert a decimal number to binary number
     * Passing the number as parameter
     * Printing the Binary output
     */
    public static function toBinary($number)
    {
        $j = 0;
        $sum = 0;
        for ($i = 7; $i >= 0; $i--) {
            if (pow(2, $i) <= $number && ($sum + pow(2, $i)) <= $number) {
                $sum += pow(2, $i);
                self::$binaryArray[$j] = 1;
                echo "1 ";
            } else {
                self::$binaryArray[$j] = 0;
                echo "0 ";
            }
            $j++;
        }
        self::swapNibbles();
        self::toDecimal();
    }

    /**
     * Function to swap the nibbles
     * Printing the swapped nibbles
     * Non-parameterized function and no return value
     */
    public static function swapNibbles()
    {
        for ($i = 0; $i < 4; $i++) {
            $temp = self::$binaryArray[$i];
            self::$binaryArray[$i] = self::$binaryArray[$i + 4];
            self::$binaryArray[$i + 4] = $temp;
        }
        echo "\nBinary Number after Swapping the Nibbles::\n";
        for ($i = 0; $i < 8; $i++) {
            echo self::$binaryArray[$i] . " ";
        }
    }

    /**
     * Function to convert a binary number to decimal number
     * Non-Parameterized function
     * Printing the Decimal output
     */
    public static function toDecimal()
    {
        $j = 0;
        $sum = 0;
        for ($i = 7; $i > 0; $i--) {
            $sum += (pow(2, $i) * self::$binaryArray[$j]);
            $j++;
        }
        echo "\nThe decimal number after Swapping is::\n" . $sum."\n";
    }
   public static function powerOf($n,$pow){
        $temp = 1;
        for($i=1;$i<=$pow;$i++){
           $temp *= $n;
        }
        return $temp;
    }
}
 
// validation for user input
$number = readline('Enter a +Ve integer: ');
$number1 = (int) $number;
//echo gettype($number1);
//var_dump(is_int($number));
if (gettype($number1) == 'integer') {
    if ($number1 > 0) {
        Binary::toBinary($number1);
    } else {
        echo "The input is negative number or zero";
    }
} else {
    echo "The input is not an integer";
}

echo   Binary::powerOf(2,3);
?>