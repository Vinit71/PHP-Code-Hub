<?php
// Using Concatenation Operator (.)
$str1 = "Hello, ";
$str2 = "World!";
$concatenatedString = $str1 . $str2;
echo "Concatenated String using concatenation operator: " . $concatenatedString . "<br>";

// Using Concatenation Assignment Operator (.=)
$greeting = "Welcome, ";
$name = "Ajay!";
$greeting .= $name;
echo "Concatenated String using concatenation assignment operator: " . $greeting;
/*
1. Concatenation Operator (.):
   - The dot (.) operator is used for joining (concatenating) two strings together.
   - Example: '$string1 . $string2' combines the values of '$string1' and '$string2' into a single string.

2. Concatenation Assignment Operator (.=):
   - The dot-equals (.=) operator is a shorthand assignment operator.
   - It concatenates the right operand to the left operand and assigns the result back to the left operand.
   - Example: '$variable .= "new text"' appends "new text" to the existing value of '$variable'. */
?>
