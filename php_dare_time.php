<?php
/**
 * Created by Moshiur.
 * Date: 9/19/2018
 * Time: 4:30 PM
 */

echo "Date  is : ". date("d-m-Y"). "<br>";
echo "Today is : ". date("l"). "<br>";
echo "Default Time is : ". date("H:i:sa"). "<br>";
echo date_default_timezone_get(). "<br>";

date_default_timezone_set('Asia/Dhaka');
echo "BD Time is : ". date("H:i:sa"). "<br>";
echo date_default_timezone_get(). "<br>";
?>