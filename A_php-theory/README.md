### Complete NOTES of PHP--->

### Variables

Variables are "containers" for storing information.
~In PHP, a variable starts with the $ sign, followed by the name of the variable:
<b>Unlike other programming languages, PHP has no command for declaring a variable. It is created the moment you first assign a value to it.</b>

<ol>
    A variable name must start with a letter or the underscore character
    A variable name cannot start with a number
    A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
    Variable names are case-sensitive ($age and $AGE are two different variables)
</ol>
PHP is a Loosely Typed Language--PHP automatically associates a data type to the variable, depending on its value.

~ If a variable is created without a value, it is automatically assigned a value of NULL.

Variables can also be emptied by setting the value to NULL:

### PHP Variables Scope

In PHP, variables can be declared anywhere in the script.

The scope of a variable is the part of the script where the variable can be referenced/used.

PHP has three different variable scopes:

1. local
2. global-
3. static
   --A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function--- we have to use global keyword

   PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.

-To save a local variable from not to being deleted after function completion/execution. we use static keyword
Note: The variable is still local to the function.

# PHP echo and print Statements

With PHP, there are two basic ways to get output: echo and print.---both convert to string
echo has no return type but print has value 1.
echo is marginally faster than print.
echo or echo() same for print

# PHP Data Types

PHP supports the following data types:

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource

# PHP Constants

Constants are like variables except that once they are defined they cannot be changed or undefined.
• Constants are automatically global and can be used across the entire script.

1. name: Specifies the name of the constant
2. value: Specifies the value of the constant
3. case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
   #define("GREETING", "Welcome to W3Schools.com!", true)#;

This automatic conversion can sometimes break your code.

# PHP Global Variables - Superglobals

Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

The PHP superglobal variables are:

$GLOBALS
$\_SERVER
$_REQUEST
$\_POST
$_GET
$\_FILES
$_ENV
$\_COOKIE
$\_SESSION;

1. PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.

2. $\_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
3. PHP $\_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.

# What is a Regular Expression?

A regular expression is a sequence of characters that forms a search pattern. When you search for data in a text, you can use this search pattern to describe what you are searching for.
A regular expression can be a single character, or a more complicated pattern.

Regular expressions can be used to perform all types of text search and text replace operations.

## Important Points

One thing to notice about PHP is that it provides automatic data type conversion.

So, if you assign an integer value to a variable, the type of that variable will automatically be an integer. Then, if you assign a string to the same variable, the type will change to a string.

$\_GET is an array of variables passed to the current script via the URL parameters.

$\_POST is an array of variables passed to the current script via the HTTP POST method.
