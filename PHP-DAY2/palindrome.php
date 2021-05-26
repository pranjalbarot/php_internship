<?php

function palindrome($string){
    if(strrev($string)==$string){
        return 1;
    }
    else{
        return 0;
    }
}
$stringmain="names";
if(palindrome($stringmain)){
    echo $stringmain." is palindrome";
}
else{
    echo $stringmain." is not palindrome";
}

?>