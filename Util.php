<?php
//Class contains functions
class Util
{
    /**
     * static functtion for check day of week
     * Passing parameters $date, $month, $year
     * using given formula by switch case prints the day of the week that date falls on.
    */
    static function dayOfWeek($date, $month, $year)
    {

        $y0 = $year - (14 - $month) / 12;
        $x = $y0 + ($y0 / 4) - ($y0 / 100) + ($y0 / 400);
        $m0 = $month + (12 * ((14 - $month) / 12)) - 2;
        $d0 = ($date + $x + ((31 * $m0) / 12)) % 7;

        switch ($d0) {
            case 0:
                echo "The Day of the Week is Sunday";
                break;
            case 1:
                echo "The Day of the Week is Monday";
                break;
            case 2:
                echo "The Day of the Week is Tuesday";
                break;
            case 3:
                echo "The Day of the Week is Wednesday";
                break;
            case 4:
                echo "The Day of the Week is Thursday";
                break;
            case 5:
                echo "The Day of the Week is Friday";
                break;
            default:
                echo "The Day of the Week is Saturday";
        }
    }

    //Methods for Temerature Conversion

    //function to convert to celsius to fahrenheit
    public static function fahrenheit($temperature){
        $degreeFarenheit = ($temperature * (9 / 5)) + 32;
        echo $temperature . "°C in Farenheit is " . round($degreeFarenheit, 2) . "°F\n";
    }

    //function to convert fahrenheit to celsius
    public static function celsius($temperature) {
        $degreeCelsius = ($temperature - 32) * (5 / 9);
        echo $temperature . "°F in Celsius is " . round($degreeCelsius, 2) . "°C\n";
    }
}
?>