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
echo "<br>";

echo "<h2>increment & decrement operators</h2>";
echo "<br>";

$x = 10;
echo ++$x;
echo "<br>";
$x = 9;
echo $x++;
echo "<br>";
$x = 10;
echo --$x;
echo "<br>";
$x= 8;
echo $x--;
echo "<br>";

echo "<h2>Logical operators</h2>";
echo "<br>";

$x = 80;
$y = 9;

if ($x == 80 && $y == 90){
    echo "Hello i am kamal";
    }else {
        echo "i am nikhil";
    }
echo "<br>";
if ($x == 80 || $y == 90){
    echo "Hello i am kamal";
    }else {
        echo "i am nikhil";
    }  
echo "<br>";
if ($x == 80 xor $y == 90){
    echo "Hello i am kamal";
    }else {
        echo "i am nikhil";
    }
echo "<br>";
if (!($x == 80)){
    echo "Hello i am kamal";
    }else {
        echo "i am nikhil";
    }              
echo "<br>";

echo "<h2>String operators</h2>";
echo "<br>";
$a = "kamal kant";
$b = " is a superstar";
$sum = $a . $b;
echo "Concatenation string is : " , $sum;
echo "<br>";
$txt1 = "my name is kamal ";
$txt2 = "kant";
$txt1 .= $txt2;
echo "Concatenation assignment is : " , $txt1;
echo "<br>";

echo "<h2>Array operators</h2>";
$a = ["a"=> "kamal kant" ,"b"=> "nikhil"];
$b = ["c"=> "tarwai" , "d" => "kamal"];

print_r($a + $b);
echo "<br>";
var_dump($a==$b);
echo "<br>";
var_dump($a===$b);
echo "<br>";
var_dump($a<>$b);
echo "<br>";
var_dump($a == $b);

echo "<br>";
echo "<h2>if condition</h2>";
$a = "kamal kant";
if ($a == "kamal kant") {
    echo "Hello my name is kamal kant";
}

echo "<br>";
echo "<h2>else condition</h2>";

$a = 45;
if ($a == 21) {
    echo "how are you";
}else {
    echo "why are you hare ?";
}

echo "<br>";
echo "<h2>elseif condition</h2>";

$a = 45;
if ($a == 21) {
    echo "how are you";
}elseif ($a == 45) {
    echo "why are you hare ?";
}else {
    echo "where are you from";
}

echo "<br>";
echo "<h2>shorthand if condition</h2>";

echo "<br>";
$a = 47;

if ($a <= 50 ) $b = "i am learning PHP";
echo $b;

echo "<br>";
echo "<h2>Nestedif condition</h2>";
$a = "kamal";

if ($a == "nikhil") {
    echo "i am nikhil";
}if ($a == "kamal"){
    echo "I Am Kamal Kant";
}else{
    echo "i am a student";
}

echo "<br>";
echo "<h2>to find number is positive or nagtive</h2>";
echo "<br>";
$a = -1;
if ($a > 0) {
    echo "Number is positive";
}elseif ($a < 0) {
    echo "number is negative ";
}else {
    echo "number is zero";
}

echo "<br>";
echo "<h2>program to find eligible age for voting</h2>";
echo "<br>";
$a = 18;
if ($a >= 18) {
    echo "you are aligible for voting";
}
elseif ($a < 18) {
    echo "you are not eligible for voting";
}
echo "<br>";
echo "<h2>program to find which number is greater</h2>";
echo "<br>";
$a = 88;
$b = 54;
if ($a > $b) {
    echo "A is greater";
}else {
    echo "B is greater";
}
echo "<br>";
echo "<h2>Largest of three numbers</h2>";
echo "<br>";
$a = 8;
$b = 7;
$c = 55;

if ($a >= $b && $a >= $c) {
    echo "$a is largest";
}elseif ($b >= $a && $b >= $c) {
    echo "$b is largest";
}else {
    echo "$c is largest";
}

echo "<br>";
echo "<h2>program to assign grades</h2>";
echo "<br>";
$a = 29;

if ($a >= 90) {
    echo "you got grade A+";
}elseif ($a >= 75) {
    echo "you got grade A";
}elseif ($a >= 60) {
    echo "you got grade B";
}elseif ($a >= 33) {
    echo "you got passing marks";
}else {
    echo "you are fail <br> Better Luck next time";
}

echo "<br>";
echo "<h2>to print login</h2>";
echo "<br>";

$username = "kamal kant";
$password = 158;

if ($username == "kamal kant" && $password == 1458) {
    echo "login sucessfull";
}elseif ($username != "kamal kant" && $password == 1458) {
    echo "username is incorrect";
}elseif ($username == "kamal kant" && $password != 1458) {
    echo "password is incorrect";
}elseif ($username != "kamal kant" && $password != 1458) {
    echo "username and password does not match";
}
?>