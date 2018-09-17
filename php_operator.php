<?php
/**
 * Created by Moshiur.
 * Date: 9/18/2018
 * Time: 12:18 AM
 */

echo "Arithmetic Calculation :";
echo "<br>";
$a = 20;
$b = 10;

echo $a+$b;
echo "<br>";
echo $a-$b;
echo "<br>";
echo $a*$b;
echo "<br>";
echo $a/$b;
echo "<br>";
echo $a%$b;
echo "<br>";

echo "Assignment Operator : ";
echo "<br>";
$a += 20;
echo "a +=20= " .  $a;
echo "<br>";
$a -= 10;
echo "a -=10= " . $a;
echo "<br>";
$a *= 5;
echo "a *=10 = " . $a;
echo "<br>";
$a /= 10;
echo "a /=10= " . $a;
echo "<br>";
$a %= 3;
echo "a %=3= " . $a;
echo "<br>";

echo "Comparision Operator : ";
echo "<br>";

$x = 150;
$y = "150";

var_dump($x == $y);
var_dump($x === $y);
var_dump($x != $y);
echo "<br>";

echo "Increment/Decrement Operator<br>";
echo "++x, x++ / --x, x--";
echo "<br>";

echo "Loical Operator : <br>";

$a = 20;
$b = 10;
if ($a == 20 and $b == 10){
    echo "a = 20 & b = 10";
}else {
    echo "Wrong data";
}
echo "<br>";

if ($a == 20 or $b == 20){
    echo "a = 20 or b = 10";
}else {
    echo "Wrong data";
}
echo "<br>";
if ($a == 20 xor $b == 20){
    echo "only one must be true! xor";
}else {
    echo "Wrong data";
}

echo "Array Operator : <br>";

$x = array(
    "a" => "Dhaka",
    "b" => "Mymensingh"
);
$y = array(
    "c" => "Ctg",
    "d" => "Rangpur"
);

var_dump($x + $y);


?>