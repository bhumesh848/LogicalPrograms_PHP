<?php

/**
 * Author -> Bhumesh Ranjane
 * PHP Version -> 8.0.9
 * Class to compute Day of the Week problem
 */
class Day_of_Week
{
    /**
     * Function to get Day of the week for a date
     * Passing date, month and year as parameters
     * Printing the day
     */
    public static function dayOfWeek($date, $month, $year)
    {
        $d = $date;
        $m = $month;
        $y = $year;
        $y0 = $y - ((14 - $m) / 12);
        $x = $y0 + ($y0 / 4) - ($y0 / 100) + ($y0 / 400);
        $m0 = $m + (12 * ((14 - $m) / 12)) - 2;
        $d0 = ($d + $x + ((31 * $m0) / 12)) % 7;
        if ($d0 == 0) {
            echo "The Day of the Week is Sunday";
        } elseif ($d0 == 1) {
            echo "The Day of the Week is Monday";
        } elseif ($d0 == 2) {
            echo "The Day of the Week is Tuesday";
        } elseif ($d0 == 3) {
            echo "The Day of the Week is Wednesday";
        } elseif ($d0 == 4) {
            echo "The Day of the Week is Thursday";
        } elseif ($d0 == 5) {
            echo "The Day of the Week is Friday";
        } else {
            echo "The Day of the Week is Saturday";
        }
    }
}
$date = readline('Enter the Date: ');
$month = readline('Enter the Month: ');
$year = readline('Enter the Year: ');
if ($date > 0 && $date <= 31 && $month > 0 && $month <= 12 && strlen((string) $year) == 4) {
    Day_of_Week::dayOfWeek($date, $month, $year);
} else {
    echo "Entered Input is Invalid";
}
?>