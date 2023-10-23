<?php

$YourName = "Vinit";

//Function without parameter
    function greet(){
        echo "Hello<br>";
    }

//Function with parameter

    function personalGreet($name){
        echo "Hello $name";
    }

//Function calling
greet();
personalGreet($YourName);

/* A 'non-parameterized function' does not accept any input values when it is called.
   It performs a specific task without relying on external data. 

   A 'parameterized function' accepts input values, known as parameters or arguments, when it is called.
   It can perform tasks based on these inputs and produce different results for different values passed into the function. */
?>



