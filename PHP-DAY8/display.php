
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
a{
  text-decoration:none;
  font-size:25px;
  color:black;
  border:5px solid green;
  border-radius:6px;
  background-color:pink;
  padding:10px;
}
</style>
</head>
<body>
<div style="overflow-x:auto;">
<?php 
$connection=mysqli_connect("localhost","root","","student");

$q=mysqli_query($connection,
    "select * from user")
    or die('error'.mysqli_error($connection));
  echo"<table>";
   while($row=mysqli_fetch_array($q)){
     echo "<tr><td>{$row['name']}</td>";
     echo "<td>{$row['email']}</td>";
     echo "<td>{$row['balance']}</td></tr>";
   }
  echo"</table>";
?>
</div>
<br/>
<br/>
<a href="index.php">Add user</a>
</body>
</html>
