<?php
function increment() {
    static $counter = 0;
    $counter++;
    echo "Now it's: $counter <br>";
}

increment(); // Output: Now it's: 1
increment(); // Output: Now it's: 2
increment(); // Output: Now it's: 3

/* Preserving Values: When a variable is declared as static inside a function, it remembers its value between 
   different calls to that function. It doesn't reset to its initial value each time the function is called.

 * Static variables are stored in the function's memory space, not the global memory space. */
?>
