<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate area </title>
</head>

<body>
    <h3>3.)Write a program to calculate area</h3>
 <div>
 <form action="" method="post" >
      <input type="number" name="length" placeholder="Please enter Length" />
      <input type="number" name="width" placeholder="Please enter Width" />
      <br>
      <input type="submit" name="length-width-submit" value="Submit" placeholder="Calculate Area & Permimeter"/>
 </form>
 <div>
        <?php 
        if (isset($_POST['length-width-submit'])) {
            $length = $_POST['length'];
            $width =$_POST['width'];
       
         $area= $length * $width ;
         $perimeter = 2 * ($length + $width);
         

        echo '<br>'.'Total Area is ='.$area.'mt²';
        echo '<br>'.'Total Perimeter is ='.$perimeter.'mt';
         }
        ?>

</div>
</div>
</body>
</html>