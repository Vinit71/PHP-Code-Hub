<?php
$score = 85;

if ($score >= 90) {
    echo "Your grade is A.";
} elseif ($score >= 80) {
    echo "Your grade is B.";
} elseif ($score >= 70) {
    echo "Your grade is C.";
} elseif ($score >= 60) {
    echo "Your grade is D.";
} else {
    echo "Your grade is F. Better luck next time.";
}
/* else if statements allow sequential condition checking. 

 * else if statements are useful when dealing with mutually exclusive conditions, 
   where only one block of code should execute based on the value of the expression. */
?>