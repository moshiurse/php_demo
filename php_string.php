<?php
/**
 * Created by Moshiur.
 * Date: 9/17/2018
 * Time: 11:22 PM
 */

$text = "PHP is a scripting language";
echo $text;
echo "<br>";
echo "strlen:  " . strlen($text);
echo "<br>";
echo "str_word_count : " . str_word_count($text);
echo "<br>";
echo "strrev: " .strrev($text);
echo "<br>";
echo "strpos: " .strpos($text, "scripting");
echo "<br>";
echo "str_replace: " .str_replace("PHP", "PYTHON",$text);


?>