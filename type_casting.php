<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php 
  $a = 4;
  $b = "Hello world";
  $c = 56.899;
  $ab = (string)$a;
    var_dump($ab);
    echo"<br>";

  $cd = (int)$b;
    var_dump($cd);
    echo"<br>";

  $num = (int)$c;
    var_dump($num);

    echo"<br>";
    $num1  = (pi());
    $sum = $a + $c + $num1;
    echo "The sum of total is ",$sum ,".";


  ?>  
</body>
</html>