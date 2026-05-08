<?php
 $x = 0;
 do {
 $y = 0;
 do {
 echo "* &nbsp;";
 $y++;
 } while ($y <= $x);
 
 echo "<br>";
 $x++;
 } while ($x <= 9);


 echo "<br>";
 echo "<h2>While Loop </h2>";
$x = 0;

while ($x <= 9) {

    $y = 0;

    while ($y <= $x) {
        echo "* &nbsp;";
        $y++;  
    }

    echo "<br>";
    $x++;
}

echo "<br>";

$x = 9;

while ($x >= 0) {

    $y = 0;

    while ($y <= $x) {
        echo "* &nbsp;";
        $y++;  
    }

    echo "<br>";
    $x--;
}
 ?>
