<?php
$str = "Hello, World!";

// Access and display characters at specific indexes
echo "Character at index 0: " . $str[0] . "<br>"; // Output: H
echo "Character at index 7: " . $str[7] . "<br>"; // Output: W
echo "Character at index 13: " . $str[13] . "<br>"; // Output: !

// Modify a character at a specific index
$str[0] = 'J';
echo "Modified string: " . $str . "<br>"; // Output: Jello, World!

/* String indexes refer to the position of individual characters within a string. */
?>
