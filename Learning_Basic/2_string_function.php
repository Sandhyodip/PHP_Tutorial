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

// PHP convert_uuencode() Function encodes a string using the uuencode algorithm.
$str = "Hello world!";
echo convert_uuencode($str); // ,2&5L;&\@=V]R;&0A `
echo '<br>';

// PHP convert_uudecode() Function decodes a string using the uuencode algorithm.
$str = ",2&5L;&\@=V]R;&0A `";
echo convert_uudecode($str); // Hello world!
echo '<br>';

$str = "Hello World!";
echo count_chars($str,3); // !HWdelor
echo '<br>';

/**
 * The crc32() function calculates a 32-bit CRC (cyclic redundancy checksum) for a string.
 * This function can be used to validate data integrity.
 * Data Integrity: Ensuring data integrity by comparing CRC32 checksums before and after data transmission or storage.
 * File Verification: Verifying the integrity of files by comparing their CRC32 checksums.
 * Hashing for Data Structures: Using CRC32 checksums as a hashing function for hash tables and other data structures.
 */
$str = crc32("Hello World!");
printf("%u\n",$str);
echo '<br>';

/*
The crypt() function in PHP is used to hash a string, typically for the purpose of securely storing passwords.
It uses one-way encryption to create a hash of a password or other data. The function supports several hashing algorithms, 
including DES, Blowfish, and MD5, among others.
*/

$password = "mypassword";
// Using Blowfish algorithm with a random salt
$salt = '$2y$10$' . bin2hex(random_bytes(22));
$hash = crypt($password, $salt);

echo "Original password: $password\n";
echo '<br>';
echo "Hashed password: $hash\n";
echo '<br>';

// Verifying the password
if (hash_equals($hash, crypt($password, $hash))) {
    echo "Password verified!";
} else {
    echo "Invalid password!";
}
echo '<br>';

// Example with password_hash() and password_verify()

$password = "mypassword";
// Hashing the password
$hash = password_hash($password, PASSWORD_DEFAULT);

echo "Original password: $password\n";
echo '<br>';
echo "Hashed password: $hash\n";
echo '<br>';

// Verifying the password
if (password_verify($password, $hash)) {
    echo "Password verified!";
} else {
    echo "Invalid password!";
}
echo '<br>';

// EXPLODE() - BREAKS A STRING INTO AN ARRAY.
$str5 = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str5)); // Array ( [0] => Hello [1] => world. [2] => It's [3] => a [4] => beautiful [5] => day. )
echo '<br>';

// The printf() function in PHP is used to output a formatted string.

$name = "John";
$age = 25;
$height = 1.75;

printf("Name: %s\n", $name);
echo '<br>';
printf("Age: %d years\n", $age);
echo '<br>';
printf("Height: %.2f meters\n", $height);
echo '<br>';

$name= 'Sandhyodip Das';
$age = 29;
printf("Hello, Myself %s and I am %d years old.",$name,$age); // Hello, Myself Sandhyodip Das and I am 29 years old.
echo '<br>';

$price = 275.50;
printf("The price is Rs.%.2f", $price); // Outputs: "The price is $19.99
echo '<br>';

/**
 * The get_html_translation_table() function in PHP returns the translation table used by htmlspecialchars() and htmlentities(). 
 * This table is useful if we need to understand or manipulate how certain characters are converted to HTML entities.
 */

$trans = get_html_translation_table(HTML_SPECIALCHARS);
echo "Translation table for htmlspecialchars:\n";
echo '<pre>';
print_r($trans); // Translation table for htmlspecialchars: Array ( ["] => " [&] => & [<] => < [>] => > )
echo '<br>';
/*
Array
(
    ["] => "
    [&] => &
    [<] => <
    [>] => >
)
*/

// Get the translation table for htmlentities
$trans_entities = get_html_translation_table(HTML_ENTITIES);
echo "\nTranslation table for htmlentities:\n";
echo '<pre>';
print_r($trans_entities);
echo '<br>';
/*
Array
(
    ["] => "
    [&] => &
    [<] => <
    [>] => >
    ......
)
*/

/**
 * hebrev() and hebrevc() can convert Hebrew logical text (the Windows encoding) to Hebrew visual text. 
 * Hebrew visual requires no special right-to-left character support to be displayed properly, making it very useful for displaying Hebrew text on the web.
 */

// The hex2bin() function converts a string of hexadecimal values to ASCII characters.
echo hex2bin("48656c6c6f20576f726c6421"); // Hello World!
echo '<br>';

/**
 * The htmlentities() function in PHP converts all applicable characters in a string to their corresponding HTML entities. 
 * This function is useful for displaying content in a web page in a way that ensures special characters (like <, >, &, etc.) are correctly displayed as text rather than being interpreted as HTML or JavaScript code.
 */

$string = "A 'quote' is <b>bold</b> & a <i>italic</i> text.";
$encodedString = htmlentities($string);
echo "Original string: $string\n";
echo "Encoded string: $encodedString\n";

$userInput = "<script>alert('Hello, this is an XSS attack!');</script>";
$safeOutput = htmlentities($userInput);
echo $safeOutput; // <script>alert('Hello, this is an XSS attack!');</script>
echo '<br>';

/**
 * htmlspecialchars_decode() is a PHP function used to convert special HTML entities back to their corresponding characters. 
 * This function is the opposite of htmlspecialchars(), which is used to convert characters to HTML entities to prevent XSS attacks and other types of injection.
 */

 /**
  * The htmlspecialchars() function in PHP converts special characters to HTML entities. 
  * This function is primarily used to prevent cross-site scripting (XSS) attacks by escaping characters that have special significance in HTML.
  */
$string = "A 'quote' is <b>bold</b> & a <i>italic</i> text.";
$encodedString = htmlspecialchars($string);
echo "Original string: $string\n";
echo "Encoded string: $encodedString\n";

// The implode() function returns a string from the elements of an array.
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr); // Hello World! Beautiful Day!
echo '<br>';
echo implode("+",$arr); // Hello+World!+Beautiful+Day!
echo '<br>';

// The join() function returns a string from the elements of an array.
// The join() function is an alias of the implode() function.
$arr1 = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr1); // Hello World! Beautiful Day!
echo '<br>';

// The levenshtein() function returns the Levenshtein distance between two strings.
// The Levenshtein distance is the number of characters we have to replace, insert or delete to transform string1 into string2.
/**
 * The levenshtein() function is faster than the similar_text() function. 
 * However, similar_text() will give you a more accurate result with less modifications needed.
 */

$word1 = "kitten";
$word2 = "sitting";
$distance = levenshtein($word1, $word2);
echo "The Levenshtein distance between '$word1' and '$word2' is $distance"; // The Levenshtein distance between 'kitten' and 'sitting' is 3
echo '<br>';
echo levenshtein("Hello World","ello World",10,20,30); // 30 // Using 5th parameter // The cost of deleting a character. Default is 1;
echo '<br>';
echo levenshtein("Hello World","llo World",10,20,30); // 60 // 30*2=60;
echo '<br>';

/**
 * The localeconv() function in PHP returns an associative array containing information about the numeric and monetary formatting based on the current locale. 
 * This function is useful for applications that need to format numbers and currency according to the local conventions.
 */

// Set the locale to US English
setlocale(LC_ALL, 'en_US.UTF-8');
// Get locale information
$locale_info = localeconv();
echo "Numeric formatting:\n";
echo "Decimal point: " . $locale_info['decimal_point'] . "\n";
echo "Thousands separator: " . $locale_info['thousands_sep'] . "\n";
echo "Grouping: " . implode(", ", $locale_info['grouping']) . "\n";
echo "\nMonetary formatting:\n";
echo "International currency symbol: " . $locale_info['int_curr_symbol'] . "\n";
echo "Local currency symbol: " . $locale_info['currency_symbol'] . "\n";
echo "Monetary decimal point: " . $locale_info['mon_decimal_point'] . "\n";
echo "Monetary thousands separator: " . $locale_info['mon_thousands_sep'] . "\n";
echo "Positive sign: " . $locale_info['positive_sign'] . "\n";
echo "Negative sign: " . $locale_info['negative_sign'] . "\n";
echo "Fractional digits (local): " . $locale_info['frac_digits'] . "\n";
echo "Fractional digits (international): " . $locale_info['int_frac_digits'] . "\n";
echo "Positive currency symbol position: " . $locale_info['p_cs_precedes'] . "\n";
echo "Negative currency symbol position: " . $locale_info['n_cs_precedes'] . "\n";

/*
This function is used to calculate the MD5 hash (Message-Digest Algorithm 5) of a given input string. 
An MD5 hash is a fixed-length alphanumeric string (usually 32 characters long) that is generated based on the 
contents of the input string. MD5 is a cryptographic hash function that was widely used for various purposes, 
including data integrity checks and password storage.
This function returns the MD5 hash of the input string as a string.
*/

$password = "mysecretpassword";
$hashedPassword = md5($password);
echo "Original Password: $password<br>"; // Original Password: mysecretpassword
echo "MD5 Hash: $hashedPassword"; // MD5 Hash: 4cab2a2db6a3c31b01d804def28276e6
echo '<br>';

/*
Use functions like password_hash() and password_verify() for password storage and verification, 
or hash('sha256', $string) for a more secure hashing algorithm.
*/

$string = "Hello, World!";
$hash = hash('sha256', $string);
echo $hash;
echo '<br>';

// The md5_file() function calculates the MD5 hash of a file.

/*
The metaphone() function calculates the metaphone key of a string.
A metaphone key represents how a string sounds if said by an English speaking person.
The metaphone() function can be used for spelling applications.
*/

// The number_format() function formats a number with grouped thousands.
echo number_format("1000000")."<br>";
echo number_format("1000000",2)."<br>";
echo number_format("1000000",2,",",".").'<br>';

// The ord() function returns the ASCII value of the first character of a string.

/*
The parse_str() function in PHP is used to parse a query string into variables. 
It takes a URL-encoded string and converts it into variables or an associative array. 
This function is particularly useful for handling URL query strings or form data sent via GET requests. 
*/

$query = "name=John&age=30&city=New+York";
parse_str($query);
echo $name.'<br>'; // Output: John
echo $age.'<br>';  // Output: 30
echo $city.'<br>'; // Output: New York

parse_str($query, $result);
print_r($result);
echo '<br>';

function parseQueryString($query) {
    $result = [];
    parse_str($query, $result);
    return $result;
}

$query1 = "name=John&age=30&city=New+York";
$parsedData = parseQueryString($query1);
print_r($parsedData);
echo '<br>';

// The quoted_printable_decode() function decodes a quoted-printable string to an 8-bit ASCII string.

// The quoted_printable_encode() function converts an 8-bit string to a quoted-printable string.

// The quotemeta() function adds backslashes in front of some predefined characters in a string.

$str1 = "1 + 1 = 2";
$str2 = "1 * 1 = 1";
$str3 = "Could you borrow me 5$?";
$str4 = "Are you not entertained? (I am..)";
$str5 = "The caret [ ^ ] Looks like a hat!";

echo quotemeta($str1)."<br>";
echo quotemeta($str2)."<br>";
echo quotemeta($str3)."<br>";
echo quotemeta($str4)."<br>";
echo quotemeta($str5)."<br>";

// The sha1() function calculates the SHA-1 hash of a string.

$str = "Sandhyodip";
echo sha1($str); // 106f1a95b61c007f54a9dfe2bd8c3d6db8de8772
echo '<br>';

// The sha1_file() function calculates the SHA-1 hash of a file.

// The similar_text() function calculates the similarity between two strings.

$str1 = "Hello, World!";
$str2 = "Hello, PHP!";

$similarity = similar_text($str1, $str2, $percent);
echo "Number of matching characters: " . $similarity . "\n"; // Number of matching characters: 8
echo "Similarity percentage: " . $percent . "%<br>"; // Similarity percentage: 66.666666666667%

// The soundex() function calculates the soundex key of a string.

/*
If we want to capture the formatted string as a variable instead of displaying it immediately, we can use this function,
which works similarly as printf() but returns the formatted string instead of printing it.
*/
$message=sprintf("Hello, my name is %s and I am %d years old.", $name, $age);
echo $message; // Hello, my name is Sandhyodip and I am 29 years old.
echo '<br>';

/*
The sscanf() function parses input from a string according to a specified format. 
The sscanf() function parses a string into variables based on the format string.
*/

$input = "John 25 5.9";
$name = "";
$age = 0;
$height = 0.0;

sscanf($input, "%s %d %f", $name, $age, $height);

echo "Name: $name\n";
echo "Age: $age\n";
echo "Height: $height\n";

/*
 The str_getcsv() function in PHP is used to parse a CSV (Comma-Separated Values) string into an array. 
 This function is particularly useful for handling CSV data that is stored in a string format, 
 allowing you to easily extract and work with the individual values.
 */
$csvString = 'John,Doe,25,"New York, USA"';
$data = str_getcsv($csvString);
print_r($data);

/*
You can specify custom delimiters and enclosure characters if your CSV data uses different ones. 
For example, if the CSV string uses a semicolon (;) as the delimiter and a single quote (') as the enclosure:
*/
$csvString = "John;Doe;25;'New York, USA'";
$data = str_getcsv($csvString, ';', "'");
print_r($data);

// If you have multiline CSV data, you can use str_getcsv() within a loop to process each line individually.
$csvString = "John,Doe,25,\"New York, USA\"\nJane,Smith,30,\"Los Angeles, USA\"";
$lines = explode("\n", $csvString);
print_r($lines);
foreach ($lines as $line) {
    $data = str_getcsv($line);
    print_r($data);
}

/*
The str_ireplace() function replaces some characters with some other characters in a string.
This function is case-insensitive.
*/
echo str_ireplace('world', 'Everyone', 'Hello World'); // Hello Everyone
echo '<br>';

// The str_pad() function pads a string to a new length.
$str = "Hello World";
echo str_pad($str,20,"Y"); //Hello WorldYYYYYYYYY 
echo '<br>';

// The str_repeat() function repeats a string a specified number of times.
echo str_repeat("Love",7);
echo '<br>';

// The str_shuffle() function randomly shuffles all the characters of a string.
echo str_shuffle("Hello World");
echo '<br>';

// The str_split() function splits a string into an array.
print_r(str_split("Hello"));
echo '<br>';

// The str_word_count() function counts the number of words in a string.
echo str_word_count("Hello world!").'<br>';
print_r(str_word_count("Hello world!",1));
echo '<br>';
print_r(str_word_count("Hello world!",2));
echo '<br>';

// The strcasecmp() function compares two strings.
echo strcasecmp("Hello world!","HELLO WORLD!").'<br>';
echo 'If this function returns 0, the two strings are equal.<br>';

// The strncasecmp() function compares two strings.
echo strncasecmp("Hello world!","hello earth!",6);
echo '<br>';

// The strchr() function searches for the first occurrence of a string inside another string.
// This function is case sensitive.
$email = "user@example.com";
$domain = strchr($email, '@');
echo $domain.'<br>'; // Output: @example.com
$user = strchr($email, '@', true);
echo $user.'<br>'; // Output: user

// The strstr() function searches for the first occurrence of a string inside another string.
// This function is case sensitive.
$email = "user@example.com";
$domain = strstr($email, '@');
echo $domain.'<br>'; // Output: @example.com
$user = strstr($email, '@', true);
echo $user.'<br>'; // Output: user

// The stristr() function searches for the first occurrence of a string inside another string.
// This function is case insensitive.
$email = "user@example.com";
$domain = stristr($email, 'E');
echo $domain.'<br>'; // Output: er@example.com
$user = stristr($email, 'X', true);
echo $user.'<br>'; // Output: user@e