<?php
$age = 18;
$isCitizen = true;

if ($isCitizen) {
    echo "You are a citizen of the country.<br>";

    if ($age >= 18) {
        echo "You are eligible to vote.";
    } 
    else{
        echo "Sorry, you must be at least 18 years old to vote.";
    }
} 
else{
    echo "Sorry, only citizens are allowed to vote.";
}

/*Nested if statements allow for hierarchical decision-making in a program. */
?>