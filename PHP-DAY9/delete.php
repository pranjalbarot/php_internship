<?php

$connection=mysqli_connect("localhost","root","","student");


$iddeleted=$_GET['deleteid'];

$q=mysqli_query($connection,
"delete from user where id='{$iddeleted}'");

if($q){
    echo"<script>
    alert('record deleted');
    window.location='display.php';
    </script>";
}

?>