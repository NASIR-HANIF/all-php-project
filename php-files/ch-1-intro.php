
<?php 

$string = "nasir hanif";
$number = 2445360;
$bvalue = 38;
$hello = " </br>hello i am ch - 1 -intro";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        h1{
            color: green;
        }
        p{
            color: greenyellow;
        }
    </style>
    <title><?php echo"my first page" ?></title>
</head>
<body>
    <?php  echo '<h1>'. $string.'</h1>'?>
    
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, doloribus.
    </p>
    <?php echo "<h2>".$number."</h2>" ?>
  <?php echo  $string." ka number".$number." or age ". $bvalue ?>
</body>
</html>
