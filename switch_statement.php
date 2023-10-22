<?php

/*You can do:
  * Addition
  * Substractioin
  * Multiply
  * Divide
*/
$operation = "Divide"; // Change this variable to test different operations
$num1 = 10;
$num2 = 5;

switch ($operation) {
    case "Addition":
        $result = $number1 + $number2;
        echo "Result: $result";
        break;
    case "Subtract":
        $result = $number1 - $number2;
        echo "Result: $result";
        break;
    case "Multiply":
        $result = $number1 * $number2;
        echo "Result: $result";
        break;
    case "Divide":
        if ($number2 != 0) {
            $result = $number1 / $number2;
            echo "Result: $result";
        } else {
            echo "Division by zero is not allowed.";
        }
        break;
    default:
        echo "Invalid operation";
        break;
}
/*The switch statement is an alternative to the if-else statement,
  when you need to compare a variable with multiple possible values.*/
?>

