<?php

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


foreach ($car1 as $value) {
  echo $value . ' <br/>';
}

echo '<table border="1">';
echo '<tr>';
foreach ($car2 as $key=>$value) {
  echo  '<td>' . $key . '</td>';
}
echo '</tr>';
echo '<tr>';
foreach ($car2 as $key=>$value) {
  echo  '<td>' . $value . '</td>';
}
echo '</tr>';
echo '<tr>';
foreach ($car1 as $key=>$value) {
  echo  '<td>' . $value . '</td>';
}
echo '</tr>';

echo '</table>';
?>