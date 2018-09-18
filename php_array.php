<?php
/**
 * Created by Moshiur.
 * Date: 9/18/2018
 * Time: 11:09 PM
 */

$x = array(3,5,7,9,10);
echo "$x[2] <br>";

echo count($x) ."<br>";

$length = count($x);

for ($i = 0; $i < $length; $i++){
    echo "array forl oop: $x[$i] <br>";
}

$dept = array("Moshiur" => "SWE", "Nahid" => "EEE", "Tonoy" => "CSE");

foreach ($dept as $y => $value){
    echo "Key : ".$y. " => ".$value. "<br>";
}

// Multi dimensional array
$cars = array(
    array("BMW", 15, 30),
    array("VOLVO", 25, 55),
    array("SAAD", 55, 90),
    array("AUDI", 70, 50)

);

for ($row = 0; $row < 4; $row++){
    echo "Row Number : " . $row . " => ";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++){
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}

// Soting array
$name = array("nahid", "moshiur", "alamain", "sohag");
sort($name);
for ($i = 0; $i < 4; $i++){
    echo $name[$i] . "<br>";
}

//asort

asort($dept);
echo "---------asort -------- <br>";
foreach ($dept as $y => $value){
    echo "Key : ".$y. " => ".$value. "<br>";
}

ksort($dept);
echo "---------ksort -------- <br>";
foreach ($dept as $y => $value){
    echo "Key : ".$y. " => ".$value. "<br>";
}



?>