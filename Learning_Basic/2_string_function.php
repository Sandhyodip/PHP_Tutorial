<?php

echo substr('HELLO',1); // ELLO // (string, starting point, length)
echo '<br>';

echo substr('HELLO',1,3); // ELL
echo '<br>';

echo substr('HELLO',-2); // LO
echo '<br>';

echo substr('HELLO',1,0); // Empty as length is 0
echo '<br>';

echo strlen('HELLO WORLD'); // 11 FINDS THE LENGTH OF A STRING
echo '<br>';

echo strpos('HELLO WORLD','O'); // 4 FINDS THE FIRST OCCURRENCE
echo '<br>';

echo strrpos('HELLO WORLD','O'); // 7 FINDS THE LAST OCCURRENCE
echo '<br>';

echo trim('HELLO WORLD         '); // STRIPS WHITE SPACES
echo '<br>';

// ltrim() - Removes whitespace or other predefined characters from the left side of a string
// rtrim() - Removes whitespace or other predefined characters from the right side of a string

echo strtoupper('hello sandhyodip'); // HELLO SANDHYODIP // MAKES EVERYTHING TO UPPER CASE
echo '<br>';

echo strtolower('HELLO SANCHARI'); // hello sanchari // MAKES EVERYTHING TO LOWER CASE
echo '<br>';

echo ucwords('hello sandhyodip'); // Hello Sandhyodip // Convert the first character of each word to uppercase.
echo '<br>';

// ucfirst() - converts the first character of a string to uppercase
// lcfirst() - converts the first character of a string to lowercase

echo str_replace('World', 'Everyone', 'Hello World'); // Hello Everyone // REPLACE STRINGS
echo '<br>';

echo is_string('Hello'); // 1 // CHECKS IF IT IS A STRING
echo '<br>';
