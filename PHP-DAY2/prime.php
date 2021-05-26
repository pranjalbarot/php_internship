<?php
function prime($num){
    if($num>1){
        for($i=2;$i<=sqrt($num);$i++){
           if($num%$i==0){
               echo "<br/>".$num." is not a prime number.";
           }
           else{
               echo $num." is a prime number.";
           }
        }
    }
    else{
        echo "<br/>".$num." is not a prime number";
    }
}
$num_main=5;
prime($num_main);
$num_main=8;
prime($num_main);
$num_main=-8;
prime($num_main);
?>