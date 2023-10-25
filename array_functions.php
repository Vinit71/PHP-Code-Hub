<?php
/* Array functions in PHP are built-in functions specifically designed for working with arrays. 
   They provide various operations and manipulations for arrays */

// Initial array
$numbers = array(1, 2, 3, 4, 5);
echo "Original Array: ";
echo implode(", ", $numbers); // Using implode to join array elements into a string

// Counting elements in the array
$count = count($numbers);
echo "<br><br>Number of elements in the array: " . $count . "<br>";

// Adding elements to the end of the array
array_push($numbers, 6, 7);
echo "Array after pushing elements: " . implode(", ", $numbers) . "<br>";

// Removing element from the end of the array
$lastElement = array_pop($numbers);
echo "Popped Element: " . $lastElement . "<br>";
echo "Array after popping element: " . implode(", ", $numbers) . "<br>";

// Removing element from the beginning of the array
$firstElement = array_shift($numbers);
echo "Shifted Element: " . $firstElement . "<br>";
echo "Array after shifting element: " . implode(", ", $numbers) . "<br>";

// Adding element to the beginning of the array
array_unshift($numbers, 0);
echo "Array after unshifting element: " . implode(", ", $numbers) . "<br>";

// Merging two arrays
$moreNumbers = array(8, 9, 10);
$mergedArray = array_merge($numbers, $moreNumbers);
echo "Merged Array: " . implode(", ", $mergedArray) . "<br>";

// Searching for an element in the array
$searchKey = array_search(7, $mergedArray);
echo "Key of the searched element (7): " . $searchKey . "<br>";

// There are many more functions.....

?>
