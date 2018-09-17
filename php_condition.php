<?php
/**
 * Created by Moshiur.
 * Date: 9/18/2018
 * Time: 3:27 AM
 */

$x = 20;

if ($x < 15){
    echo "smaller then 15";
} else {
    echo "greater then 15";
}
echo "<br>";
$food = "mango";

switch ($food){
    case "lichi":
        echo "O love lichi";
    break;
    case "mango":
        echo "I love mango";
        break;
    case "cocnut":
        echo "O love cocnut";
        break;

    default:
        echo "I love fruit";

}
?>