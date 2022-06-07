<?php
include("Util.php");

//creating object of Util class
$days = new Util();
//Taking command line aurguments for Date, month and year
$date = $argv[1];
$month = $argv[2];
$year = $argv[3];

if ($date > 0 && $date <= 31 && $month > 0 && $month <= 12 && strlen((string) $year) == 4) {
    
    $days::dayOfWeek($date, $month, $year);
} else {
    echo "Entered Input is Invalid";
}

?>
