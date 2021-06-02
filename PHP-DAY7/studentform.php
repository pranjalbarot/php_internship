<?php

$connection=mysqli_connect("localhost","root","","student");

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $genders=$_POST['gender'];
    $dob=date('y-m-d',strtotime($_POST['dob']));
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $pincodes=$_POST['pin'];
    $pwd=$_POST['pwd'];

    $sql=mysqli_query($connection,
    "insert into student_info(stu_name,stu_gender,stu_dob,stu_email,stu_mobile,stu_address,stu_pincode,stu_pwd)
     values('$name','$genders','$dob','$email','$mobile','$address','$pincodes','$pwd')") or die("error".mysqli_error($connection));

     echo "<script>alert('record updated');
         window.location='studentform.html';
     </script>";
}

?>