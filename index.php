<?php
echo "<br>";
echo "<h2>Airtimatic operators</h2>";
$a = 55;
$b = 55;
$sum = $a + $b;
$sub = $a - $b;
$multi = $a * $b;
$div = $a / $b;
$mod = $a % $b;
$exp = $a ** $b;
echo "sum is :" , $sum;
echo "<br>";
echo "sub is :" , $sub;
echo "<br>";
echo "multipication is :" , $multi;
echo "<br>";
echo "division is :" , $div;
echo "<br>";
echo "modulus is :" , $mod;
echo "<br>";
echo "Exponentiation is :" , $exp;
echo "<br>";

echo "<h2>Assignment operators</h2>";
echo "<br>";

$c = 42;
$c += 55;
echo "add and assign : " , $c;
echo "<br>";
$d = 42;
$d -= 55;
echo "sub and assign : " , $d;
echo "<br>";
$e = 42;
$e *= 55;
echo "multiply and assign : " , $e;
echo "<br>";
$f = 42;
$f /= 55;
echo "divide and assign : " , $f;
echo "<br>";
$g = 42;
$g %= 55;
echo "modulus and assign : " , $g;
echo "<br>";

echo "<h2>Comprasion operators</h2>";
echo "<br>";

$num1 = 100;
$num2 = "100";
var_dump($num1 == $num2);
echo "<br>";

$num1 = 100;
$num2 = 100;
var_dump($num1 === $num2);
echo "<br>";

$num1 = 100;
$num2 = "100";
var_dump($num1 >= $num2);
echo "<br>";

$num1 = 100;
$num2 = "100";
var_dump($num1 <= $num2);
echo "<br>";

$num1 = 100;
$num2 = 500;
var_dump($num1 != $num2);
echo "<br>";

$num1 = 100;
$num2 = "hello";
var_dump($num1 !== $num2);
echo "<br>";

$num1 = 100;
$num2 = 100;
var_dump($num1 <> $num2);
echo "<br>";

$num1 = 100;
$num2 = 26;
var_dump($num1 > $num2);
echo "<br>";

$num1 = 100;
$num2 = 125;
var_dump($num1 < $num2);
echo "<br>";

$num1 = 100;
$num2 = 869;
var_dump($num1 <=> $num2);

?>