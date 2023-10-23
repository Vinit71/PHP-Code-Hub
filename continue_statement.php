<?php

$skipOn = 5;
echo "Printing odd numbers from 1 to 10, excluding $skipOn:<br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == $skipOn) {
        continue; // skip $skipOn value and move to the next iteration.
    }
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
/* The 'continue' statement in programming allows us to skip specific parts of a loop and move to the next cycle of the loop.*/
?>
