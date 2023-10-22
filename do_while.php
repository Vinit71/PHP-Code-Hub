<?php
$num = 5;
$i = 1;

echo "Multiplication Table for $num:<br>";

do {
    $result = $num * $i;
    echo "$num x $i = $result<br>";
    $i++;
} while ($i <= 10);

/*The do-while loop executes a block of code at least once, 
  and then repeats it as long as a specified condition is true.*/
?>
