<?php
$connection=mysqli_connect("localhost","root","","student");

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['bal'];

    $q=mysqli_query($connection,
    "insert into user(name,email,balance) values('$name','$email','$balance')") 
    or die('error'.mysqli_error($connection)) ;

    if($q){
        echo "<script>
        alert('record updated successfully.');
        window.location='display.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New User</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <style>
         body{
             width: 100vw;
             height: 100vh;
         }
         h2{
             text-align:center;
         }
         .container{
             text-align: center;
             border: none;
             border-radius: 10px;
             box-shadow: 0px 0px 5px 5px rgb(167, 127, 127);
             width: 50%;
         }
         input{
            border: none;
            border-radius: 10px;
            outline: none;
            border-bottom: 2px solid black;
            margin: 10px;
         }
     </style>
</head>

<body>
<!-- main body of create user -->
<h2>CREATE USER</h2>
<br><br>
  <div class="container">
    <div class="screen">
      <div class="screen-body">
          <img class="image-fluid" src="images/create.jpg">
        <div class="screen-body-item">
          <form class="app-form" method="post" action="index.php">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="BALANCE" type="number" name="bal" required>
            </div>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>