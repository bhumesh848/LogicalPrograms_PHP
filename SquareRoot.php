<?php
class RootOfNum{

    static function Root($num,$typeRoot){
        return pow($num,1/$typeRoot);
    }
}
$num = readline("Enter Number: ");
$typeRoot = readline("Enter type of root: ");

if(is_numeric($num) && $num > 0 && is_numeric($typeRoot) && $typeRoot > 0){
echo round(RootOfNum::Root($num,$typeRoot),3);
}
else{
    echo "Please Enter valid input";

}
?>