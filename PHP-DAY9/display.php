
<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
  background-color:pink;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}
.btn{
  text-decoration:none;
  font-size:25px;
  color:black;
  border:5px solid green;
  border-radius:6px;
  background-color:pink;
  padding:10px;
}
h1{
  text-align:center;
}
th{
  background-color:black;
  color:white;
}
</style>
</head>
<body>
  <h1>DISPLAY USER</h1>
  <br><br>
<div style="overflow-x:auto;">
<?php 
$connection=mysqli_connect("localhost","root","","student");

$q=mysqli_query($connection,
    "select * from user")
    or die('error'.mysqli_error($connection));
  echo"<table>";
  echo "<tr>";
  echo "<th>NAME</th>";
  echo "<th>EMAIL</th>";
  echo "<th>BALANCE</th>";
  echo "<th></th>";
  echo "<th></th>";
  echo "</tr>";
   while($row=mysqli_fetch_array($q)){
     echo "<tr>";
     echo "<td>{$row['name']}</td>";
     echo "<td>{$row['email']}</td>";
     echo "<td>{$row['balance']}</td>";
     echo "<td><a href='delete.php?deleteid={$row['id']}'>Delete</a></td>";
     echo "<td><a href='update.php?updateid={$row['id']}'>Edit</a></td>";
     echo "</tr>";
   }
  echo"</table>";
?>
</div>
<br/>
<br/>
<a class="btn" href="index.php">Add user</a>
</body>
</html>
