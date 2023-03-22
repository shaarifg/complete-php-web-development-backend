### Complete NOTES of Php--->

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
