<?php

/**
 * Author -> Bhumesh Ranjane
 * PHP Version -> 8.0.9
 * Class for converting the temperature
 */
class Temperature_Conversion
{
    /**
     * Function to convert temperature from °C to °F
     * Passing the temperature as a parameter
     * Printing the converted temperature
     */
    public static function farenheit($temperature)
    {
        $degreeFarenheit = ($temperature * (9 / 5)) + 32;
        echo $temperature . "°C in Farenheit is " . round($degreeFarenheit, 2) . "°F\n";
    }

    /**
     * Function to convert temperature from °F to °C
     * Passing the temperature as a parameter
     * Printing the converted temperature
     */
    public static function celsius($temperature)
    {
        $degreeCelsius = ($temperature - 32) * (5 / 9);
        echo $temperature . "°F in Celsius is " . round($degreeCelsius, 2) . "°C\n";
    }
}
$c = readline('Enter temperature in Celsius: ');
$f = readline('Enter temperature in Farenheit: ');
Temperature_Conversion::celsius($f);
Temperature_Conversion::farenheit($c);
?>