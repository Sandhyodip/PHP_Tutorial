# DOCUMENT LINK

`<link>`:  [PHP DOCUMENTATION BY SANDHYODIP DAS](https://docs.google.com/document/d/1YksfOYolRfHCZsLGSuXGYCSBPAuDh2AQRVqLokQBzgk/edit?usp=sharing)

# WHAT IS PHP?

>PHP IS AN ACRONYM FOR "PHP: HYPERTEXT PREPROCESSOR".

>PHP IS WIDELY USED, OPEN SOURCE SCRIPTING LANGUAGE.

>PHP SCRIPTS ARE EXECUTED ON THE SERVER.

>PHP IS FREE TO DOWNLOAD AND USE.

# PHP (NOT CASE SENSITIVE)

>In PHP, KEYWORDS (e.g. IF, ELSE, WHILE, ECHO, etc.), CLASSES, FUNCTIONS, and USER-DEFINED FUNCTIONS ARE NOT
CASE-SENSITIVE. However, all VARIABLES names are case-sensitive..!!

# PHP VARIABLES

> Starts with the $ sign, followed by the name of the variable.

> Name must start with a letter or the underscore character.

> Name cannot start with a number.

> Name can only contain ALPHA-NUMERIC characters and underscores (A-z, 0-9, and _).

> Names are case-sensitive ($age and $AGE are two different variables).

# WHAT IS PHP FILE?

> PHP files can contain text, HTML, CSS, JavaScript, and PHP code.

> PHP code is executed on the server, and the result is returned to the browser as plain HTML.

> PHP files have extension ".php".

# WHY PHP IS A LOOSELY TYPED LANGUAGE

>Because we don't have to tell PHP which data type the variable is. PHP automatically associates a data type to the
variable, depending on its value.

# GLOBAL SCOPE & LOCAL SCOPE

> A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function.

> A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function

> The "global" keyword is used to access a global variable from within a function. To do this, use the global keyword
before the variables (inside the function).

> PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.
This array is also accessible from within functions and can be used to update global variables directly.

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
   <?php 
   $x=20;
   $y=30;

   function globalTest(){
    global $x, $y;
    $y= $x+$y;
   }
   globalTest();
   echo $y.'<br>';

   $a=50;
   $b=25;
   
   function testGlobal(){
    $GLOBALS['b']=$GLOBALS['a']+$GLOBALS['b'];
   }
   testGlobal();
   echo $b;
   ?>
</body>
</html>
```

```php
<?php 
   $A = 5;
   $B = 10;
   function myTestFunction()
   {
       global $A, $B;
       $answer = $A + $B;
       echo "RESULT : $answer";
       echo '<br>';
   }
   myTestFunction(); // RESULT : 15
   
   $A1 = 20;
   $B1 = 10;
   function myTestFunctionOne() {
       $GLOBALS['R1'] = $GLOBALS['A1'] + $GLOBALS['B1'];
   }
   myTestFunctionOne();
   echo "NEW RESULT : $R1";
   echo '<br>'; // NEW RESULT : 30
   ?>
```
# PHP The static Keyword

> Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

```php
<?php 
   function myTest() {
    static $x = 0;
    echo $x;
    $x++;
  }
  
  myTest();
  echo "<br>";
  myTest();
  echo "<br>";
  myTest(); // 0 1 2
   ?>
```

# Difference between ECHO & PRINT

> They are both used to output data to the screen. The differences are small.

> ECHO has no return value while PRINT has a return value of 1, so it can be used in expressions.

```php
<?php 
   $result = echo "Hello, World!"; // This will cause a syntax error

   $result = print "Hello World!"; // This will output "Hello, World!" and $result will be 1
   print '<br>'.$result; // Output: 1
?>
```

> ECHO can take multiple parameters (although such usage is rare) while PRINT can take one argument.

```php
<?php 
   echo "Hello", " ", "World", "!"; // This will output: Hello World!
   print "Hello", " ", "World", "!"; // This will cause a syntax error
?>
```
> ECHO is marginally faster than print.

# How does PHP Work?

> Client makes a request.

> Server runs PHP / extensions.

> Query database if needed.

> Load other files if needed.

> Result is sent back to client.

# HOW TO SET PASSWORD IN PHP MY ADMIN

> USER ACCOUNTS --> [ROOT, LOCAL HOST] EDIT PRIVILEGES --> CHANGE PASSWORD.

> XAMPP --> PHPMYADMIN --> CONFIG.INC (PHP FILE) --> PUT ENTERED PASSWORD HERE [$cfg['Servers'][$i]['password'] = '';].

# PHP supports the following data types

> 1. STRING.
> 2. INTEGER.
> 3. FLOAT / DOUBLE.
> 4. BOOLEAN.
> 5. ARRAY.
> 6. OBJECT.
> 7. NULL.
> 8. RESOURCE.

# NULL VALUE

> Null is a special data type which can have only one value: NULL.

> A variable of data type NULL is a variable that has no value assigned to it.

> If a variable is created without a value, it is automatically assigned a value of NULL.

> Variables can also be emptied by setting the value to NULL:

```php
<?php
$null= null;
echo gettype($null);
echo '<br>'; //NULL
?>
```
# PHP CLASSES & OBJECT

> CLASSES & OBJECTS are the two main aspects of object-oriented programming (OOPS).

> A CLASS is a template for OBJECT, and an OBJECT is an instance of a CLASS.

> When the individual OBJECTS are created, they INHERIT all the properties and behaviors from the class, but each object will have different values for the properties.

> Let's assume we have a CLASS named Car. A Car can have properties like model, color, etc. We can define variables like $model, $color, and so on, to hold the values of these properties. 

> When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values
for the properties.

> If we create a __construct() function, PHP will automatically call this function when you create an object from a class.

> ## In PHP, constants are defined using the define() function or the const keyword.


|  define() | const |
| ------------- | ------------- |
| define() can be used anywhere  | const must be used within the top-level scope or inside classes and interfaces.  |
| Constants defined with define() are defined at runtime.| Constants defined with const are defined at compile time. |

# The gzcompress() function in PHP

> It is used to compress a string using the ZLIB data compression algorithm. This can be particularly useful for reducing the size of data that needs to be stored or transmitted, thus improving storage efficiency and transmission speed.

```php
string gzcompress ( string $data [, int $level = -1 [, int $encoding = ZLIB_ENCODING_DEFLATE ]] )
```
> data: The data to compress.

> level (optional): The compression level. It ranges from 0 (no compression) to 9 (maximum compression). The default value is -1, which lets the algorithm choose the optimal level.

> encoding (optional): The encoding mode. The default is ZLIB_ENCODING_DEFLATE. Other values include ZLIB_ENCODING_GZIP and ZLIB_ENCODING_RAW.

> It returns the compressed string on success or false on failure.

```php
<?php
$data = "This is a test string to be compressed.";
$compressed_data = gzcompress($data);

echo "Original data: $data\n";
echo "Compressed data: $compressed_data\n";

// To decompress the data, you can use gzuncompress()
$uncompressed_data = gzuncompress($compressed_data);
echo "Uncompressed data: $uncompressed_data\n";
?>
```
# Rainbow Attack in Database

> A rainbow attack is a type of cryptographic attack commonly used to crack password hashes stored in a database.

### Key Concepts:
> Hash Function: A function that converts input data (like a password) into a fixed-size string of characters, which appears random. Common hash functions include MD5, SHA-1, and SHA-256.

> Hash Table: A data structure that maps keys to values. In the context of rainbow attacks, this typically involves precomputed hash values and their corresponding plaintext passwords.

> Rainbow Table: A precomputed table for reversing cryptographic hash functions. It is a more efficient form of a hash table and is used specifically to reduce the amount of time required to crack passwords.

## Process:
### Precomputation Phase:

> A large set of potential passwords is chosen.

> Each password is hashed using the same hash function that was used to store passwords in the target database.

> The resulting hashes are stored in a rainbow table, along with the corresponding plaintext passwords.

### Attack Phase:

> The attacker obtains the hash of the password they want to crack (usually through a database breach or some form of data leakage).

> The attacker searches the rainbow table for a matching hash.

> If a match is found, the corresponding plaintext password is retrieved from the rainbow table.

## Advantages of Rainbow Tables:

> Speed: Precomputation allows the actual cracking process to be much faster.

> Efficiency: Rainbow tables are more space-efficient than simple hash tables due to the use of a reduction function and chain links that compress the data.

### Mitigation:

> Salting: Adding a unique, random value (called a salt) to each password before hashing makes rainbow tables much less effective, as the table would need to be computed for each possible salt.

> Stronger Hashing Algorithms: Using more complex and computationally expensive hashing algorithms can make the creation of effective rainbow tables impractical.

### Example:

> Imagine a database stores passwords using MD5 hashes. An attacker could use a rainbow table containing precomputed MD5 hashes of common passwords. If the attacker finds a match between a hash in the rainbow table and a hash from the database, they can determine the original password without directly computing the hash at the time of the attack.

# Cross-Site Scripting (XSS)

> It is a type of security vulnerability typically found in web applications, including those written in PHP. 

> It allows attackers to inject malicious scripts into web pages viewed by other users. 

> These scripts can steal cookies, session tokens, or other sensitive information, manipulate the content of the webpage, or perform actions on behalf of the user without their consent.

## Types of XSS Attacks:

### Stored XSS (Persistent XSS):

> The malicious script is permanently stored on the target server, such as in a database, comment field, or forum post. When a user views the stored content, the script is executed.

### Reflected XSS (Non-Persistent XSS):

> The malicious script is reflected off a web server, such as in an error message, search result, or any other response that includes some or all of the input sent to the server as part of the request. The script is executed in the user's browser as part of the server's response.

### DOM-Based XSS:

> The vulnerability exists in the client-side script rather than the server-side code. The attack is executed as a result of modifying the DOM environment in the victim's browser, which is then used by the client-side script.

### Example of XSS in PHP:

>Imagine a simple PHP page that displays a user's input:

```php
<?php
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    echo "Hello, " . $name . "!";
}
?>
```
> If an attacker sends a URL like this:

```php
http://example.com/?name=<script>alert('XSS');</script>
```
> The page will output:

```php
Hello, <script>alert('XSS');</script>!
```
## Preventing XSS in PHP:

### Sanitize User Input:

> Use functions like htmlspecialchars() to convert special characters to HTML entities.

```php
$name = htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8');
echo "Hello, " . $name . "!";
```
### Use Prepared Statements:

> For database interactions, use prepared statements to prevent injection attacks.

### Content Security Policy (CSP):

> Implement CSP headers to restrict the sources from which content can be loaded and executed.

### Escape Output:

> Always escape output based on the context in which it will be used (HTML, JavaScript, URL, etc.).

### Validate Input:

> Validate and filter user input to ensure it conforms to expected formats.

> # Difference between printf() & sprintf()


|  printf() | sprintf() |
| ------------- | ------------- |
|  Outputs directly to the screen. | Returns the formatted string. 
|Returns the length of the outputted string.| Returns the formatted string itself.
| Suitable for immediate output, such as in scripts or command-line applications.| Suitable for creating strings that need to be manipulated or stored before outputting. |

# strtok()

```php
strtok(string $string, string $token): string|false
```
> $string: The input string. This parameter is required only for the first call.

> $token: The delimiter character(s).

> Returns a string token on each call.

> Returns false when there are no more tokens.

### Explanation
> First Call: The first call to strtok() takes both the string and the delimiter. It returns the first token.

> Subsequent Calls: Subsequent calls should omit the string parameter and only include the delimiter. These calls return the next token each time.

> Loop: The loop continues until strtok() returns false, indicating there are no more tokens.

# password_hash()

> This function is used for securely hashing passwords using modern and recommended cryptographic algorithms. 

> It's designed to make password storage more secure by incorporating features like salting and adaptive hashing. 

> This function is a crucial part of secure password management to prevent common attacks, such as rainbow table attacks and brute force attacks.
 
```php
password_hash(string $password, int $algo, array $options = []): string|false
```
> $password: The password that we want to hash.

> $algo: The algorithm to use for hashing. Commonly used values are PASSWORD_DEFAULT and PASSWORD_BCRYPT.

> $options: An optional array of options. For PASSWORD_BCRYPT, you can specify the cost parameter which determines the computational cost of the hashing.

> The function returns the hashed password as a string, or false on failure.

### Important Notes

#### Salting: password_hash() automatically handles salting. You don't need to generate or store a separate salt.

#### Storage: Store the generated hash in your database. This hash contains the salt and algorithm information needed to verify the password later.

#### Security: Always use PASSWORD_DEFAULT to ensure your application uses the most secure algorithm available in future versions of PHP.
