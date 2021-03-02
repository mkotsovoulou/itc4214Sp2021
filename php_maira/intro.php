<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
    <title>Intro to PHP</title>
</head>
<body>
	<h1>
    Hello
  </h1>
  
  <?php 
      $x = 1;
      $y = 2.3;
      $name = 'Maira';
      $name{4} = "o";
      echo $name . '<br/>';
      $continue = true;
      var_dump($continue);
      echo '<br/>';
      echo gettype($x) . '<br/>';
     
      echo gettype($y) . '<br/>';
   
      echo gettype($name);
      echo '<br/>';
      /* var_dump is used for debugging */
      var_dump($name);
  
      echo '<p>This is <b>something</b> from PHP</b><br>';
        $array2 = array("Hello", "There"); 
        $array2[1] = "xxxx";
        $array2[] = "This is new";
        $array2[] = "yyyy";
        var_dump($array2);
        $myArray = array(0, "maira", TRUE, 4.5, $array2);
        echo $myArray[2];
  
        var_dump($myArray);
  ?>
</body>
</html>