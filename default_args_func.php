<?php
function calCircleArea($radius=5) {
    $area = 3.14 * $radius * $radius;
    echo "Area of the circle with $radius is $area<br>";
}

calCircleArea(10); //passing 10
calCircleArea(); //passing no value, so it will take default value of argument

/* Default argument functions allow you to provide a default value for a function parameter, 
   ensuring the function can be called without explicitly passing a value for that parameter.

 * It's used especially in cases where certain parameters often have a common or expected value. */
?>
