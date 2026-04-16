<?php

function checkVotingAge() {
    
    // POST data get karo
    $name = $_POST['full_name'];
    $birthYear = $_POST['birth_year'];

    // Current year
    $currentYear = 2026;

    // Age calculate
    $age = $currentYear - $birthYear;

    echo "<h2>Welcome, $name</h2>";

    if ($age >= 18) {
        echo "<p style='color: green; font-weight: bold;'>
                Verification Successful
              </p>";
    } else {
        echo "<p style='color: red; font-weight: bold;'>
                Access Denied: Under 18
              </p>";
    }
}

// Function call
checkVotingAge();

?>