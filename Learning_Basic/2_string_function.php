<?php

echo substr('HELLO',1); // ELLO // (string, starting point, length)
echo '<br>';

echo substr('HELLO',1,3); // ELL
echo '<br>';

echo substr('HELLO',-2); // LO
echo '<br>';

echo substr('HELLO',-2,1); // L
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

$string= "Hello Everyone..!! I am Sandhyodip Das. I have completed B.Tech in EE from MAKAUT.";

echo gzcompress($string); // COMPRESSED DATA. WE CAN UN COMPRESS IT BY USING gzuncompress().
echo '<br>';
echo '<br>';

echo str_word_count("Hello world!"); // 2 // COUNT NUMBER OF WORDS IN A STRING
echo '<br>';

/**
* strpos() function searches for a specific text within a string. 
* If a match is found, the function returns the character position of the first match. 
* If no match is found, it will return FALSE.
*/

echo strpos("Hello world!", "world"); // 6
echo '<br>';

echo strpos("Hello world!", "o"); // 4
echo '<br>';

echo strpos("Hello world!", "O"); // NO RESULT AS IT IS CASE SENSITIVE
echo '<br>';

echo strrpos("Hello world!", "o"); // 7 // Finds the position of the last occurrence of a string inside another string
echo '<br>';

echo stripos("Hello world!", "O"); // 4 //  Finds the position of the first occurrence of a string inside another string (case-insensitive)
echo '<br>';

echo strripos("Hello world!", "O"); // 7 //  Finds the position of the last occurrence of a string inside another string (case-insensitive)
echo '<br>';

echo strrev('Sandhyodip Das'); // saD pidoyhdnaS
echo '<br>';

$str = addcslashes("Hello World!", "W"); // ADDCSLASHES()
echo($str); // Hello \World!
echo '<br>';

$str = "Welcome to my humble Homepage!";
echo $str."<br>";
echo addcslashes($str,'m')."<br>";
echo addcslashes($str,'H')."<br>";
echo addcslashes($str,'A..Z')."<br>";
echo addcslashes($str,'a..z')."<br>";

/**
* addslashes() returns a string with backslashes in front of predefined characters.
* The predefined characters are:
* 1. single quote (')
* 2. double quote (")
* 3. backslash (\)
* 4. NULL
*/

$str1 = addslashes('What does "yolo" mean?');
echo($str1); // What does \"yolo\" mean?
echo '<br>';

// bin2hex() CONVERTS STRING TO HEXADECIMAL VALUES

$str2 = bin2hex("Hello World!");
echo($str2); // 48656c6c6f20576f726c6421
echo '<br>';
echo pack("H*",$str2) . "<br>";

// CHOP() - REMOVE CHARACTERS FROM RIGHT END OF A STRING.
$str3 = "Hello World!";
echo $str3 . "<br>";
echo chop($str3,"World!"); // Hello
echo '<br>';

// CHR() - RETURNS A CHARACTER FROM A SPECIFIED ASCII VALUE.
echo chr(52) . "<br>"; // 4  // DECIMAL VALUE
echo chr(052) . "<br>"; // * // OCTAL VALUE
echo chr(0x52) . "<br>"; // R // HEX VALUE

// CHUNK_SPLIT() - SPLIT THE STRING AFTER EACH CHARACTER AND ADD A "." AFTER EACH SPLIT.
$str4 = "Hello world!";
echo chunk_split($str4,2,"."); // H.e.l.l.o. .w.o.r.l.d.!.
echo '<br>';
