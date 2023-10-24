<?php
$globalVariable = "This is a global variable";

function myFunction() {
    $localVariable = "This is a local variable";
    echo "Inside function: $localVariable <br>";

    global $globalVariable; /* It allows you to use and modify the global variable's value within the function*/
    
    echo "Inside function: $globalVariable <br>"; /*This will work as $globalVariable has global scope 
                                                    and can be access anywhere within the program. */
}

myFunction();

echo "Outside functoin: $localVariable <br>"; /* This will not going to execute as $localVarible 
                                                 can't be used and access out of it's scope. */

echo "Outside function: $globalVariable";

/* Local Scope: Variables declared inside a function can only be accessed within that function.

 * Global Scope: Variables declared outside of any function or class can be accessed from any part of the script.

 * Global keyword: It allows you to use and modify the global variable's value within the function,
   ensuring that changes made inside the function are reflected in the global scope outside the function. */
?>
