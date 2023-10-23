<?php

$exitAt = 6;
echo "Counting to 10:<br>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
    if ($i == $exitAt) {
        echo "(Breaking the loop)";
        break; // exit the loop when $i value is equal to $exitAt.
    }
}
/* A 'break' statement is used in programming to terminate a loop prematurely, 
   allowing the program to exit the loop before it reaches its natural end. */
?>

