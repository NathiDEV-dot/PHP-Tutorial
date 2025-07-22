<?php
echo "Wassup"; //  PHP statements end with a semicolon (;).

//In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.
Echo "Hello, world!";
EcHo "Welcome to your first lesson";

/*
A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables)
*/

$age = 22;
$name = "John Doe";
$price = 14.67;
$is_valid = true;

// The following example will show how to output text and a variable:

echo "My name is $name" . "\n";
echo "I am $age years old" . "\n";
echo "This item costs R$price" . "\n";
echo "The answwer is $is_valid" . "\n";

// PHP Data Types
// String - A string is a sequence of characters, like "Hello world!".
$text = "Yeah buddy";

// Integer - An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.
$count = 0;

//Float (floating point numbers - also called double) - A float (floating point number) is a number with a decimal point or a number in exponential form.
$temp = 67.83;

// Boolean - A Boolean represents two possible states: TRUE or FALSE.
$is_member = false;

// Array - An array stores multiple values in one single variable.
$scores = array(22, 14, 67, 11);
$names = array("nathi", "katlego", "marlon");

/*
Null is a special data type which can have only one value: NULL.
A variable of data type NULL is a variable that has no value assigned to it.
Tip: If a variable is created without a value, it is automatically assigned a value of NULL.
Variables can also be emptied by setting the value to NULL:
*/
$x = null;
?>
