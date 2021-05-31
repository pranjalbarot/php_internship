<?php

$a=$_POST['txt1'];
$b=$_POST['txt2'];
$c=$_POST['txt3'];
$d=$_POST['txt4'];
$e=$_POST['txt5'];
$i=($a+$b+$c+$d+$e)/5;
echo $i."<br/>";
if($i>=80){
        echo "great marks..!! well done...!! keep it up.<br/>";
    }
    else if($i>=70 && $i<80){
        echo "marks is good..!! bur still, keep working...<br/>";
    }
    else{
        echo "keep working...<br/>";
    }
?>