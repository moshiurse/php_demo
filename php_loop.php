<?php
/**
 * Created by PhpStorm.
 * Date: 9/18/2018
 * Time: 6:40 PM
 */

// While Loop
$x = 10;

while ($x >= 1){

    echo " While Number: $x <br>";
    $x--;
}

//Do While Loop
$x = 1;

do{

    echo " DO While Number: $x <br>";
    $x--;
}while($x >= 4);

// For Loop

for($y = 0; $y < 5; $y++){
    echo " For Number: $y <br>";
}

$depts = array("SWE", "EEE", "ETE", "CSE");
foreach ($depts as $dept){
    echo " ForEach Department: $dept <br>";
}
?>