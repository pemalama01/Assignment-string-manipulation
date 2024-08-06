<?php
// Step 1: Define a string with character names separated by commas, "Gandalf,Aragorn,Legolas".
$characters = "Gandalf,Aragorn,Legolas";

// Step 2: Split the string into an array of character names.
$character_array = explode(",", $characters);

// Step 3: Convert each character name to lowercase.
foreach ($character_array as &$character) {
    $character = strtolower($character);
}
// Step 4: Join the character names with an asterisk (*).
$joined_characters = implode("*", $character_array);
echo $joined_characters;
