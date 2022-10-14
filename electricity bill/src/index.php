<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Calcultaion</title>
</head>
<?php
$result_str = $result = '';
if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
}
    if($units <= 50) {
        $bill = $units * 3.50;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * 3.50;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * 4.00);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * 4.00);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * 5.20);
    }
    else {
        $temp = (50 * 3.5) + (100 * 4.00) + (100 * 5.20);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * 6.50);
    }
?>
<body>
    <h3> 1.)Write a program to calculate Electricity bill in PHP</h3>
<div >
		<h3>Calculate Your Electricity Bill here</h3>
		<form action="" method="post" >
            	<input type="number" name="units" id="units" placeholder="Please enter no. of Units" />
            	<input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
		</form>
		<div>
		    <?php echo '<br />'.'Total amount of ' . $units . ' - ' . $bill?>
        </div>
</div>
</body>
</html>