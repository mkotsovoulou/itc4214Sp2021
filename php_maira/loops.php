<?php

for ($x=1; $x<10; $x++) {
  echo $x;
  echo '<br/>';
}

$myArray = array(0, "maira", TRUE, 4.5);
echo '<h1> The contents of the array are : </h1>';
for ($x=0; $x<4; $x++) {
    echo $myArray[$x];
    echo '<br/>';
}

$y=5;
while ($y < 10) {
  echo $y;
  $y++;
}

do {
  echo $y;
  $y++;
} while ($y < 10);

?>