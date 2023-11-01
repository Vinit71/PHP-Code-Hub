<?php
//Some of the library functions in php

// Generate an array of 5 random numbers between 1 and 10
$randomNumbers = [];
for ($i = 0; $i < 5; $i++) {
    $randomNumbers[] = rand(1, 10);
}

// Calculate the sum of the random numbers
$sum = array_sum($randomNumbers);

// Convert the array of numbers to a comma-separated string
$numbersString = implode(", ", $randomNumbers);

// Output the random numbers, their sum, and the comma-separated string
echo "Random Numbers: $numbersString <br>";
echo "Sum of Numbers: $sum";

/*PHP library functions are predefined functions in PHP that perform specific tasks, 
  allowing developers to perform various operations without writing custom code.*/
?>

