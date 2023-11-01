<?php
// Logical Operators
echo "Logical Operators:<br>";
$bool1 = true;
$bool2 = false;

var_dump($bool1 && $bool2);  // Logical AND
var_dump($bool1 || $bool2);  // Logical OR
var_dump(!$bool1);           // Logical NOT

// Assignment Operators
echo "<br><br>Assignment Operators:<br>";
$a = 10;
$b = 5;

$a = $b; // Assignment
echo "a = b: " . $a . "<br>";

/*Logical operators in PHP are used to perform operations on Boolean values. 
  && represents logical AND, || represents logical OR, and ! represents logical NOT.

 *Assignment operators in PHP are used to assign values. = assigns the value of the right operand to the left operand. */
?>