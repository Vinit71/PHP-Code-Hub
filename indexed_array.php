<?php

$numb = array(1, 2, 3, 4, 5); //Creating an array

// Printing elements using numerical indexes
echo "Element at index 0: $numb[0] <br>"; // Output: Element at index 0: 1
echo "Element at index 2: $numb[2] <br>"; // Output: Element at index 2: 3

// Modifying an element in the array
$numb[1] = 10;

// Adding a new element to the end of the array
$numb[] = 6;

// Printing the modified array
echo "Modified Array: ";

for ($i = 0; $i < count($numb); $i++) {
    echo " $numb[$i]";
}

/* An indexed array is an array where each element is associated with a numerical index.

 * The index starts at 0 for the first element and go to size-1.

 * Elements in an indexed array can be accessed using their numerical indexes.
 
 * You can add new elements to the end of an indexed array without specifying an index. */
?>
