<?php
// Integer
$integerVar = 42;
// Floating-point number
$floatVar = 3.14;
// String
$stringVar = "Hello, World!";
// Boolean
$boolVar = true;
// Array
$arrayVar = array(1, 2, 3, 4, 5);
// Associative Array
$assocArrayVar = array(
    "name" => "Vinit", "age" => 20, "city" => "Chandigarh" );
// Null
$nullVar = null;
// Outputting the values
echo "Integer: " . $integerVar . "<br>";
echo "Floating-point number: " . $floatVar . "<br>";
echo "String: " . $stringVar . "<br>";
echo "Boolean: " . ($boolVar ? "true" : "false") . "<br>";
echo "Array: ";
print_r($arrayVar); //printing array
echo "<br>";
echo "Associative Array: ";
print_r($assocArrayVar); //printing associative array
echo "<br>";
echo "Null: " . var_export($nullVar, true) . "<br>";
?>
