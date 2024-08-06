<?php
// Step 1: Define a clue string, "find the hidden treasure at the golden island".
$clue_text = "find the hidden treasure at the golden island";
// Step 2: Replace "golden" with "mystic".
$modified_clue = str_replace("golden", "mystic", $clue_text);
// Step 3: Convert the modified clue to uppercase letters.
$uppercase_clue = strtoupper($modified_clue);
// Step 4: Output the final clue in uppercase.
echo $uppercase_clue;
