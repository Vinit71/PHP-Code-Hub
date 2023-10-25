<?php
// Creating a multidimensional array with names and their ages
$students = array(
    array("Vinit", 20),
    array("Chaya", 20),
    array("surjeet", 23)
);

// Adding a new student to the multidimensional array
$students[] = array("Ajay", 28);

for ($i = 0; $i < count($students); $i++) {
    echo "Name: " . $students[$i][0] . ", Age: " . $students[$i][1] . "<br>";
}

/* Multidimensional arrays are essentially arrays within arrays.

 * These are excellent for representing tabular data, where information can be organized into rows and columns.
 
 * These are commonly used in mathematics and computer science for matrix operations. */
?>
