<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title></title>
</head>
<body>
  <h1>
     Our car listings
  </h1>

<?php
$headings = array(
  'model'=> 'MODEL',
  'year' => 'YEAR',
'colour' => 'COLOR',
'doors'  => '# DOORS');

$car1 = array(
  'model'=> 'FIAT',
  'year' => 2021,
'colour' => 'blue',
'doors'  => 5);

$car2 = array(
  'model' => 'MINI',
  'year' => 2020,
'colour' => 'white',
'doors' => 2);

$cars = array ( $headings, $car1, $car2);

echo '<table border="1">';
 foreach ($cars as $car) {
   echo '<tr>';
   foreach($car as $value) {
     echo '<td>' . $value . '</td>';
   }
   echo '</tr>';
   echo '<br>';
 }
echo '</table>';

?>

</body>
</html>
