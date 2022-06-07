<?php
class RootOfNum{

    static function Root($num,$typeRoot){
        return pow($num,1/$typeRoot);
    }
}
function input(){
$num = readline("Enter Number: ");
$root = 2;

if(is_numeric($num) && $num > 0 && is_numeric($root) && $root > 0){
echo round(RootOfNum::Root($num,$root),3);
}
else{
    echo "Please Enter valid input";

}
}
input();

?>