<?php
/*Buid-in functions for String */

$str = "Hello, World!";
echo "String: $str<br>";

// Using strlen() function to get string length
$length = strlen($str);
echo "Length of the string: $length<br>";

// Using strpos() function to find the position of a substring
$position = strpos($str, "World");
echo "Position of 'World' in the string: $position<br>";

// Using substr() function to extract a substring
$substring = substr($str, 7, 5); // Extracts characters from index 7 to 11
echo "Substring from position 7: $substring";

//Many more String functions....
?>
