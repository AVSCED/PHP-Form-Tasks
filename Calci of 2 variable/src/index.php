<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator of 2 Variables</title>
</head>
<?php
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "+":
           $result = $first_num + $second_num;
            break;
        case "-":
           $result = $first_num - $second_num;
            break;
        case "X":
            $result = $first_num * $second_num;
            break;
        case "/":
            $result = $first_num / $second_num;
    }
}
?>
<body>
    <h3> 2.) Write a simple calculator program in PHP using switch case</h3>
<div >
	  <form action="" method="post" >
            <p>
            <b style="margin-right:.6%">Number 1:</b>  <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /> 
            </p>
            <p>
            <b style="margin-right:.6%">Number 2:</b> <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> 
            </p>
            <p>
            <b style="margin-right:2.4%">Result:</b>  <input readonly="readonly" name="result" value="<?php echo $result; ?>"> 
            </p >
            <p style="margin-left:6.4%">
            <input type="submit" name="operator" value="+" />
            <input type="submit" name="operator" value="-" />
            <input type="submit" name="operator" value="X" />
            <input type="submit" name="operator" value="/" />
            </p>
        </form>
    </div>
</body>
</html>