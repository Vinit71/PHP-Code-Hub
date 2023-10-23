<?php
$x = 10;
function callbyvalue($x){
    $x = $x + 10;
    return($x);
}
echo "The value inside the function is ",callbyvalue($x)."<br>";
echo "The value outside the function  is $x";

/* In call by value, a copy of the actual argument is passed to the function defination.
 * The actual argument value is not modified. All the modification are done in formal arguments 
   which are stored at different memory area. */
?>