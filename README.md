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










