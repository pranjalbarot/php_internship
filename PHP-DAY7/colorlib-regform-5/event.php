<?php
$connection=mysqli_connect("localhost","root","","student");

if(isset($_POST['submit'])){
    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
    $company=$_POST['company'];
    $email=$_POST['email'];
    $code=$_POST['area_code'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $exist=$_POST['exist'];

    $sql=mysqli_query($connection,
    "insert into event(first_name,last_name,company_name,e_mail,codes,phone_no,event_subject,existance)
    values('$fname','$lname','$company','$email','$code','$phone','$subject','$exist')")
    or die('eroor'.mysqli_error($connection));

        echo "<script>
        alert('event registered successfully.');
        window.location='index.html';
        </script>";
}
else{
    echo "connection failed.";
}

?>