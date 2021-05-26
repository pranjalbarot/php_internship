<!DOCTYPE html>

<head>
	<title>Simple Calculator Program in PHP</title>
</head>

<?php
if(isset($_POST['first_number']) || isset($_POST['second_number']) || isset($_POST['operators'])){
$first_num = $_POST['first_number'];
$second_num = $_POST['second_number'];
$operator = $_POST['operators'];
$result = '';
if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "Add":
           $result = $first_num + $second_num;
            break;
        case "Subtract":
           $result = $first_num - $second_num;
            break;
        case "Multiply":
            $result = $first_num * $second_num;
            break;
        case "Divide":
            $result = $first_num / $second_num;
    }
}
}

?>

<body>
    <div id="page-wrap">
	<h1>PHP - Simple Calculator Program</h1>
	  <form action="" method="POST">
            <p>
                <input type="number" name="first_number" id="first_num" required="required" value="<?php echo $first_num; ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="second_number" id="second_num" required="required" value="<?php echo $second_num; ?>" /> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
            </p>
            <input type="submit" name="operators" value="Add" />
            <input type="submit" name="operators" value="Subtract" />
            <input type="submit" name="operators" value="Multiply" />
            <input type="submit" name="operators" value="Divide" />
	  </form>
    </div>
</body>
</html>