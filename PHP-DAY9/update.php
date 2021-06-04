<?php

$connection=mysqli_connect("localhost","root","","student");

$updated=$_GET['updateid'];

$q=mysqli_query($connection,"select * from user where id='{$updated}'");

$data=mysqli_fetch_array($q);

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
<h2>UPDATE USER</h2>
<br><br>
  <div class="container">
    <div class="screen">
      <div class="screen-body">
          <img class="image-fluid" src="images/create.jpg">
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" type="text" name="name" value="<?php echo ; ?>" required>
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