<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert Hours into minutes and Vice Versa</title>
</head>
<?php 
$result_str = $result = '';
if (isset($_POST['submit'])) {
    $val = $_POST['hour'];
    $d= $_POST['conv'];
    $value = $val * $d ;
}
?>
<body>
    <h3>4.)Write a program for conversion of Hours into minutes and vice versa.</h3>
    <form action="" method="post" >
            <p>
            <input type="number" name="hour" id="hour" required="required" /> 
            </p>
            <p>
            <p>Please select type of conversion:</p>
               <input type="radio" id="htm" name="conv" value="60" required="required">
               <label for="htm">Hours to Minutes</label><br>
               <input type="radio" id="hts" name="conv" value="3600" required="required">
               <label for="hts">Hours to Seconds</label><br>
            <p>
                <?php 
                echo $value;
                ?>
            <button type="submit" id="submit" name="submit">Convert</button>
            </p >
        </form>
    </div>
</body>
</html>