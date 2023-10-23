<?php
$x = 10;

function callbyreference(&$x){
    $x = $x + 10;
    return($x);
}
echo "The value inside the function is ",callbyreference($x)."<br>";
echo "The value outside the function  is $x";

/* In call by value, The address of the actual argument is passed to the function.
 * All the changes are done in the actual arguments.
 * Therefor, any changes made in the formal arguments will also reflect in the actual arguments. */
?>