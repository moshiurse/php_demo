<?php
/**
 * Created by Moshiur.
 * Date: 9/19/2018
 * Time: 4:57 PM
 */

echo readfile("file.txt"). "<br>";

$myfile = fopen("file.txt", "r") or die("File not found");

//echo fread($myfile, filesize("file.txt")). "<br>";
//echo fgets($myfile, filesize("file.txt")). "<br>";
//echo fgetc($myfile). "<br>";

while (!feof($myfile)){
    echo fgets($myfile) . "<br>";
}

fclose($myfile);

$createfile = fopen("createfile.txt", "w");
$text = "Moshiur Rahman";

fwrite($createfile, $text);

?>