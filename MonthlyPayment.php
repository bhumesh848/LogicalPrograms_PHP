<?php
$principle = $argv[1];
$rate = $argv[2];
$years = $argv[3];
class Monthly_Payment{
    /**
     * Function to calculate monthly payment
     * Passing principal, rate and years as parameters
     * Printing the monthly payment
     */
    public static function monthlyPayment($principle, $rate, $years){
        $p = $principle;
        $n = 12 * $years;
        $r = $rate / (12 * 100);
        $payment = ($p * $r) / (1 - pow(1 + $r, -$n));
        echo "Your Monthly Payment is: " . round($payment, 2);
    }
}

Monthly_Payment::monthlyPayment($principle, $rate, $years);
?>