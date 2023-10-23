<?php
function factorial($num) {
    if ($num === 0 || $num === 1) {
        return 1;
    } else {
        return $num * factorial($num - 1); //function calling itself
    }
}

$number = 6;
$fact = factorial($number);
echo "Factorial of $number is: $fact"; // Output: Factorial of 6 is: 720

/* Self-Calling Function: Recursion involves a function calling itself within its own definition.

 * Base Case: Recursive functions have a base case, a condition under which the function stops calling itself 
   and returns a specific value. It prevents infinite recursion.

 * Divide and Conquer: Recursive algorithms works on divide and conquer technique.
*/
?>
