<?php
$num=4;
checkPNZ($num);
$num=-9;
checkPNZ($num);
$num=0;
checkPNZ($num);
function checkPNZ($num){
if($num>=0){
    if($num==0){
        echo "<br>".$num." is a zero";
    }
    else{
        echo "<br>".$num." is a positive number.";
    }
}
if($num<0)
{
    echo "<br>".$num." is a nagative number.";
}
}
?>