<?php

class coupon
{
    function coupons($num)
    {
        $couponArr = array();
        $distinctArr = array();
        $flag = 0;
        $i = 0;
        $j = 0;
        while ($i <= $num) {
            $f =0;
            $randomResult = rand(1, 10);
            // echo $randomResult . "\n";
            $couponArr[$j] = $randomResult;
            $j++;
            $i++;
        }
        print_r($couponArr);

        for($i = 0; $i<sizeof($couponArr); $i++) {
            $f = 0;
            for($j = 0; $j<sizeof($couponArr); $j++) {
                if($distinctArr[$j] == $randomResult) {
                    echo "hkhf";
                    $f=1;
                    break;

                }
            }
            if($f == 0){
                $distinctArr[$j] = $randomResult;
                echo "ggkkk";
               echo "coupon is: " . $distinctArr[$j]."\n";
               $j++;
               
            }
            print_r($distinctArr) ;
        }
    }
  

}

$coupon = new coupon();
$num = readline("Enter the how many coupon u want ");
$coupon->coupons($num);
